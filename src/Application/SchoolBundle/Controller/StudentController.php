<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 15:32
 */

namespace Application\SchoolBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StudentController extends Controller
{
    public function extractAction()
    {
        $em = $this->getDoctrine()->getManager();

        $school = $em->getRepository('ApplicationSchoolBundle:School')->find(1);

        $extractCame = $em->getRepository('ApplicationSchoolBundle:Student')->extract('Прибыл');
        $extractLeft = $em->getRepository('ApplicationSchoolBundle:Student')->extract('Выбыл');

        return $this->render('@ApplicationSchool/School/extract.html.twig', array('extractCame' => $extractCame, 'extractLeft' => $extractLeft, 'school' => $school));
    }

    public function summerAction()
    {
        $em = $this->getDoctrine()->getManager();

        $report = $em->getRepository("ApplicationSchoolBundle:Student")->wholeReport();

        return $this->render("@ApplicationSchool/School/summer.html.twig", array('report' => $report));
    }
}