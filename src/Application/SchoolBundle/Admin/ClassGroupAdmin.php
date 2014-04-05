<?php
/**
 * Created by PhpStorm.
 * User: Almaz
 * Date: 20.11.13
 * Time: 22:51
 */

namespace Application\SchoolBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class ClassGroupAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('grade', 'choice', array('choices' => array(1 => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11)))
            ->add('alphabet')
            ->add('personal', 'sonata_type_model');
        //->add('students','sonata_type_collection',array(),array('edit'=>'inline','inline'=>'table','position'=>'sortable'));

    }

    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper
            ->addIdentifier('grade')
            ->addIdentifier('alphabet')
            ->addIdentifier('personal');
    }
}