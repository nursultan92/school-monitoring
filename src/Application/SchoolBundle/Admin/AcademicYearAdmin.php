<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04.04.14
 * Time: 11:23
 */

namespace Application\SchoolBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AcademicYearAdmin extends Admin
{

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('year');
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('year');
    }
} 