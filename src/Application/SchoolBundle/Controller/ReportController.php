<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 14:11
 */

namespace Application\SchoolBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReportController extends Controller
{

    public function indexAction()
    {
        return $this->render('ApplicationSchoolBundle:Report:index.html.twig');
    }
} 