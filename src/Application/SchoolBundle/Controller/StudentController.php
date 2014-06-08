<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 15:32
 */

namespace Application\SchoolBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class StudentController extends Controller
{
    public function extractAction()
    {
        $em = $this->getDoctrine()->getManager();

        $school = $em->getRepository('ApplicationSchoolBundle:School')->findAll()[0];

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

    public function genderPieAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $data = $em->getRepository('ApplicationSchoolBundle:Student')->genderStatistics();

        return new JsonResponse($data);
    }

    public function classPieAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $data = $em->getRepository('ApplicationSchoolBundle:Student')->classStatistics();

        $html = $this->renderView('@ApplicationSchool/Student/class_pie.html.twig', array('data' => $data[1]));

        return new JsonResponse(array($data[0], $html));
    }
}