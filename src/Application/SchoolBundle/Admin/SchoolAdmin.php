<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/5/14
 * Time: 12:47 PM
 */

namespace Application\SchoolBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SchoolAdmin extends Admin
{

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('academicYear', 'sonata_type_model')
            ->add('currentQuarter', 'sonata_type_model')
            ->add('principal', 'sonata_type_model');
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('academicYear')
            ->add('currentQuarter')
            ->add('principal');
    }

} 