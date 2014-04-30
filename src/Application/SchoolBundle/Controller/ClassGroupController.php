<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 12:26
 */

namespace Application\SchoolBundle\Controller;


use Application\SchoolBundle\Entity\ClassGroup;
use Application\SchoolBundle\Form\ClassGroupType;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClassGroupController extends Controller
{

    public function listAction()
    {
        $classGroups = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:ClassGroup')->findAll();

        return $this->render('ApplicationSchoolBundle:ClassGroup:list.html.twig', array('classgroups' => $classGroups));
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

    public function reportListAction($id)
    {
        $classGroup = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:ClassGroup')->find($id);

        if (!$classGroup) {
            throw new EntityNotFoundException();
        }

        $data = $this->renderView('@ApplicationSchool/ClassGroup/report_list.html.twig', array('class' => $classGroup));

        return new JsonResponse($data);
    }

    public function classGroupAction(Request $request, $id)
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

        if ($request->getMethod() == "POST")
            return new JsonResponse($html);
        else
            return new Response($html);
    }
} 