<?php

namespace Application\SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationSchoolBundle:Default:index.html.twig', array('name' => $name));
    }
}
