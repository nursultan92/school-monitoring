<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 12:26
 */

namespace Application\SchoolBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
} 