<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 14:11
 */

namespace Application\SchoolBundle\Controller;


use Application\SchoolBundle\Entity\Report;
use Application\SchoolBundle\Form\ReportType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ReportController extends Controller
{

    public function indexAction()
    {
        return $this->render('ApplicationSchoolBundle:Report:index.html.twig');
    }

    public function createAction()
    {
        return $this->render('ApplicationSchoolBundle:Report:create.html.twig');
    }

    public function addToHistoryAction()
    {
        $em = $this->getDoctrine()->getManager();

        $school = $em->getRepository('ApplicationSchoolBundle:School')->findAll()[0];

        $classes = $em->getRepository('ApplicationSchoolBundle:ClassGroup')->findAll();
        $result = $em->getRepository('ApplicationSchoolBundle:Report')->persist($school,$classes);


        return new JsonResponse($result);
    }

    public function searchFormAction()
    {
        $report = new Report();

        $reportForm = $this->createForm(new ReportType(), $report);

        return $this->render(
            'ApplicationSchoolBundle:Report:form.html.twig',
            array('form' => $reportForm->createView())
        );
    }


} 