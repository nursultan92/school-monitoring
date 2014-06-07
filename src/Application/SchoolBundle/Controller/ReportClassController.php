<?php
/**
 * Created by PhpStorm.
 * User: nursultan
 * Date: 6/6/14
 * Time: 9:29 PM
 */

namespace Application\SchoolBundle\Controller;


use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ReportClassController extends Controller
{

    public function classAction($id)
    {
        $reportClass = $this->get('doctrine.orm.entity_manager')->getRepository('ApplicationSchoolBundle:ReportClass')->find($id);

        return $this->render('ApplicationSchoolBundle:ReportClass:more_info.html.twig', array(
            'class' => $reportClass
        ));
    }

    public function reportAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $class = $em->getRepository('ApplicationSchoolBundle:ReportClass')->find($id);

        /*//TODO: Should select default school
        $school = $em->getRepository('ApplicationSchoolBundle:School')->findAll()[0];*/

        if (!$class) {
            throw new EntityNotFoundException();
        }

        $byYear = $em->getRepository('ApplicationSchoolBundle:ReportStudent')->byYear($class);

        $byNationality = $em->getRepository('ApplicationSchoolBundle:ReportStudent')->byNationality($class);

        return $this->render('ApplicationSchoolBundle:ReportClass:report.html.twig', array('byNationality' => $byNationality, 'byYear' => $byYear, 'class' => $class));
    }

} 