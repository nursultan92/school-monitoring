<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 13:42
 */

namespace Application\SchoolBundle\Controller;


use Application\SchoolBundle\Entity\AcademicYear;
use Application\SchoolBundle\Form\AcademicYearType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcademiYearController extends Controller
{

    public function listAction()
    {
        //$academicYears = $this->getDoctrine()->getRepository('ApplicationSchoolBundle:AcademicYear')->findAll();

        $academicYear = new AcademicYear();

        $academicYearForm = $this->createForm(new AcademicYearType(), $academicYear);

        return $this->render('ApplicationSchoolBundle:AcademicYear:list.html.twig', array('form' => $academicYearForm->createView()));
    }
} 