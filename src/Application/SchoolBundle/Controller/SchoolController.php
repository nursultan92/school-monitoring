<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/5/14
 * Time: 1:47 PM
 */

namespace Application\SchoolBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SchoolController extends Controller
{

    public function currentAction()
    {
        //TODO: get default school.
        $school = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:School')->findAll();

        return $this->render('ApplicationSchoolBundle:School:current.html.twig', array('school' => $school[0]));
    }
} 