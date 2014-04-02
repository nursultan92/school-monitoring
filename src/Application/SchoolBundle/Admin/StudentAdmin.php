<?php
/**
 * Created by PhpStorm.
 * User: Almaz
 * Date: 21.11.13
 * Time: 2:33
 */

namespace Application\SchoolBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class StudentAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('firstname')
            ->add('lastname')
            ->add('classgroup', 'sonata_type_model')
            ->add('personalNumber')
            ->add('sex', 'choice', array('choices' => array('М' => 'М', 'Ж' => 'Ж')))
            ->add('nationality', 'sonata_type_model')
            ->add('birthday', 'date', array('widget' => 'choice', 'years' => range(date('Y') - 14, date('Y'))))
            ->add('address')
            ->add('telephone');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('firstname')
            ->add('lastname')
            ->addIdentifier('classgroup', 'sonata_type_model')
            ->add('personalNumber')
            ->add('sex', 'choice', array('choices' => array('М' => 'М', 'Ж' => 'Ж')))
            ->add('nationality', 'sonata_type_model')
            ->add('birthday', 'date', array('locale' => 'kg', 'timezone' => 'Asia/Bishkek'))
            ->add('address');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('classgroup')
                        ->add('nationality');
    }
} 