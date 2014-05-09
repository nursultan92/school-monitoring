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
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ReportController extends Controller
{

    public function indexAction()
    {
        $reports = $em = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:Report')->findAll();
        return $this->render('ApplicationSchoolBundle:Report:index.html.twig',array('reports'=>$reports));
    }

    public function createAction()
    {
        return $this->render('ApplicationSchoolBundle:Report:create.html.twig');
    }

    public function reportAction($id){
        $report= $this->getDoctrine()->getManager()->getRepository('ApplicationSchoolBundle:Report')->find($id);
        if(!$report){
            throw new EntityNotFoundException();
        }

        return $this->render('ApplicationSchoolBundle:Report:report.html.twig',array('report'=>$report));

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