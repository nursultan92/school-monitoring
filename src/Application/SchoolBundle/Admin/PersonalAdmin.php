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

class PersonalAdmin  extends Admin{

    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->add('firstname','text',array('label'=>'Имя'));
        $formMapper->add('lastname','text',array('label'=>'Фамилия'))
            ->add('classgroup');
    }

    protected function configureListFields(ListMapper $listMapper){
        $listMapper->addIdentifier('firstname',null,array('label'=>'Имя'))
            ->addIdentifier('lastname',null,array('label'=>'Фамилия'))
            ->add('classgroups',null,array('label'=>'Руководитель класса'));
    }
} 