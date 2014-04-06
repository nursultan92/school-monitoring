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

        if (!$classGroup) {
            throw new EntityNotFoundException();
        }

        //TODO: Render Report by Year.
        $byYear = $em->getRepository('ApplicationSchoolBundle:Student')->byYear($classGroup);

        die(var_dump($byYear));

        return $this->render('ApplicationSchoolBundle:Report:classgroup.html.twig', array('classgroup' => $classGroup));
    }
} 