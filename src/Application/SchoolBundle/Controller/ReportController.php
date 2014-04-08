<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 14:11
 */

namespace Application\SchoolBundle\Controller;


use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\Query\ResultSetMapping;
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

    public function classGroupAction($grade, $alphabet)
    {
        $em = $this->getDoctrine()->getManager();
        $classGroup = $em->getRepository('ApplicationSchoolBundle:ClassGroup')->findOneBy(array('grade' => $grade, 'alphabet' => $alphabet));

        //TODO: Should select default school
        $school = $em->getRepository('ApplicationSchoolBundle:School')->findAll();

        if (!$classGroup) {
            throw new EntityNotFoundException();
        }

        $byYear = $em->getRepository('ApplicationSchoolBundle:Student')->byYear($classGroup);

        $byNationality = $em->getRepository('ApplicationSchoolBundle:Student')->byNationality($classGroup);


        $html = $this->renderView('ApplicationSchoolBundle:Report:classgroup.html.twig', array('classgroup' => $classGroup, 'byYear' => $byYear, 'school' => $school[0], 'byNationality' => $byNationality));

        return new JsonResponse($html);
    }
} 