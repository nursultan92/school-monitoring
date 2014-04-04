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

    public function listAction()
    {
        $academicYear = new AcademicYear();

        $academicYearForm = $this->createForm(new AcademicYearType(), $academicYear, array('method' => 'POST', 'action' => $this->generateUrl('school_academicyear_get')));

        return $this->render('ApplicationSchoolBundle:AcademicYear:list.html.twig', array('form' => $academicYearForm->createView()));
    }

    public function getAction()
    {
        $params = $this->getRequest()->request->get('application_schoolbundle_academicyear');
        $id = $params['year'];

        $em = $this->getDoctrine()->getManager();
        $academicYear = $em->getRepository('ApplicationSchoolBundle:AcademicYear')->find($id);
        $reports = $academicYear->getReports();

        if (!$academicYear) {
            throw new EntityNotFoundException();
        }

        //TODO: Do it with AJAX
        return new JsonResponse($reports);
    }
}