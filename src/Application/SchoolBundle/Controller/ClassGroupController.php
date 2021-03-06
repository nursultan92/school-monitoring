<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 12:26
 */

namespace Application\SchoolBundle\Controller;


use Application\SchoolBundle\Entity\AcademicYear;
use Application\SchoolBundle\Entity\ClassGroup;
use Application\SchoolBundle\Entity\School;
use Application\SchoolBundle\Form\ClassGroupType;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClassGroupController extends Controller
{

    public function listAction()
    {
        $classGroups = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:ClassGroup')->findAll();

        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate($classGroups, $this->get('request')->query->get('page', 1), 20);

        return $this->render('ApplicationSchoolBundle:ClassGroup:list.html.twig', array('classgroups' => $pagination));
    }

    public function getAction($id)
    {
        $classGroup = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:ClassGroup')->find($id);

        return $this->render('@ApplicationSchool/ClassGroup/get.html.twig', array('classgroup' => $classGroup));
    }

    public function getFormAction()
    {
        $classGroup = new ClassGroup();
        $classForm = $this->createForm(
            new ClassGroupType(),
            $classGroup
        );
        return $this->render('ApplicationSchoolBundle:ClassGroup:form.html.twig', array('classForm' => $classForm->createView()));
    }

    public function alphabetAction($grade)
    {
        $classGroups = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:ClassGroup')->findByGrade($grade);

        $data = $this->renderView('ApplicationSchoolBundle:ClassGroup:alphabet.html.twig', array('classGroups' => $classGroups));

        return new JsonResponse($data);
    }

    public function reportListAction(Request $request, $id, $type)
    {
        $classGroup = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:ClassGroup')->find($id);

        if (!$classGroup) {
            throw new EntityNotFoundException();
        }

        $html = $this->renderView('@ApplicationSchool/ClassGroup/report_list.html.twig', array('class' => $classGroup));

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse($html);
        } else if ($type == "pdf") {
            $mpdf = $this->get('tfox.mpdfport');
            $html = $this->renderView('@ApplicationSchool/ClassGroup/report_pdf.html.twig', array('class' => $classGroup));
            return $mpdf->generatePdfResponse($html);
        } else {
            $html = $this->renderView('@ApplicationSchool/ClassGroup/report_html.html.twig', array('class' => $classGroup));
            return new Response($html);
        }
    }

    public function classGroupAction(Request $request, $id, $type)
    {
        $em = $this->getDoctrine()->getManager();
        $classGroup = $em->getRepository('ApplicationSchoolBundle:ClassGroup')->find($id);

        //TODO: Should select default school
        $school = $em->getRepository('ApplicationSchoolBundle:School')->findAll()[0];

        if (!$classGroup) {
            throw new EntityNotFoundException();
        }

        $byYear = $em->getRepository('ApplicationSchoolBundle:Student')->byYear($classGroup);

        $byNationality = $em->getRepository('ApplicationSchoolBundle:Student')->byNationality($classGroup);


        $html = $this->renderView('ApplicationSchoolBundle:Report:classgroup.html.twig', array('classgroup' => $classGroup, 'byYear' => $byYear, 'school' => $school, 'byNationality' => $byNationality));

        if ($request->isXmlHttpRequest())
            return new JsonResponse($html);
        else if ($type == "pdf") {
            $mpdf = $this->get('tfox.mpdfport');
            return $mpdf->generatePdfResponse($html);
        } else
            return $this->render('ApplicationSchoolBundle:Report:classgroup_base.html.twig', array('classgroup' => $classGroup, 'byYear' => $byYear, 'school' => $school, 'byNationality' => $byNationality));
    }

    public function upgradeAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        try {
            $em->getRepository('ApplicationSchoolBundle:ClassGroup')->upgrade();
            /* @var $school School*/
            $school  = $em->getRepository('ApplicationSchoolBundle:School')->findAll()[0];
            /* @var $academicYear AcademicYear*/
            $academicYear = $school->getAcademicYear();
            $oldYear = explode('-',$academicYear->getYear());

            $year = new AcademicYear();
            $year->setYear($oldYear[1] . ((int)$oldYear[1]+1));
            $em->persist($year);
            $em->flush();

            $school->setAcademicYear($year);
            $em->persist($school);
            $em->flush();
        } catch (\Exception $e) {
            throw $e;
        }



        $this->get('session')->getFlashBag()->add('notice', 'Вы успешно начали новый учебный год');
        return $this->redirect($this->generateUrl('school_main_index'));
    }
} 