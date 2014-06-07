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
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class AcademiYearController extends Controller
{


    public function getAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $academicYear = $em->getRepository('ApplicationSchoolBundle:AcademicYear')->find($id);
        $quarters = $em->getRepository('ApplicationSchoolBundle:Report')->findQuarters($academicYear);
        return new JsonResponse($quarters);
    }
}