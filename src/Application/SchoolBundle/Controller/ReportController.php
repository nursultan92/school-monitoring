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


} 