<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 12:01
 */

namespace Application\SchoolBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

    public function indexAction()
    {
        return $this->render('ApplicationSchoolBundle:Main:index.html.twig');
    }
} 