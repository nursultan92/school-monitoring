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

class ClassGroupController extends Controller
{
    /*    private $em;

        public function  __construct()
        {
            $this->em = $this->getDoctrine()->getManager();
        }*/


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
        $classForm = $this->createForm(new ClassGroupType(), $classGroup);

        return $this->render('ApplicationSchoolBundle:ClassGroup:form.html.twig', array('classForm' => $classForm->createView()));
    }

    public function alphabetAction($grade)
    {
        $classGroups = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:ClassGroup')->findByGrade($grade);

        $data = $this->renderView('ApplicationSchoolBundle:ClassGroup:alphabet.html.twig', array('classGroups' => $classGroups));

        return new JsonResponse($data);
    }

    public function reportListAction($grade, $alphabet)
    {
        $classGroup = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:ClassGroup')->findOneBy(array('grade' => $grade, 'alphabet' => $alphabet));

        if (!$classGroup) {
            throw new EntityNotFoundException();
        }

        $data = $this->renderView('@ApplicationSchool/ClassGroup/report_list.html.twig', array('class' => $classGroup));

        return new JsonResponse($data);
    }
} 