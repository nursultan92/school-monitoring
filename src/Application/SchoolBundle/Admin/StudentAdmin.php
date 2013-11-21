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
        $formMapper->add('firstname',null,array('label'=>'Имя'))
            ->add('lastname',null,array('label'=>'Фамилия'))
            ->add('classgroup','sonata_type_model',array('label'=>'Класс'))
            ->add('personalNumber',null,array('label'=>'Персональный Номер'))
            ->add('sex','choice',array('label'=>'Пол','choices'=>array('М'=>'М','Ж'=>'Ж')))
            ->add('nationality','sonata_type_model',array('label'=>'Национальность'))
            ->add('birthday',null,array('label'=>'Дата рождения'))
            ->add('address',null,array('label'=>'Адрес'))
            ->add('telephone',null,array('label'=>'Телефон'))
            ->add('cameFrom','sonata_type_model',array('label'=>'Прибыл','required'=>false))
            ->add('cameComment',null,array('label'=>'Комментарий'))
            ->add('leftTo','sonata_type_model',array('label'=>'Выбыл','required'=>false))
            ->add('leftComment',null,array('label'=>'Комментарий'));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('firstname',null,array('label'=>'Имя'))
            ->addIdentifier('lastname',null,array('label'=>'Фамилия'))
            ->addIdentifier('classgroup','sonata_type_model',array('label'=>'Класс'))
            ->addIdentifier('personalNumber',null,array('label'=>'Персональный Номер'))
            ->add('sex','choice',array('label'=>'Пол','choices'=>array('М'=>'М','Ж'=>'Ж')))
            ->add('nationality','sonata_type_model',array('label'=>'Национальность'))
            ->add('birthday',null,array('label'=>'Дата рождения'))
            ->add('address',null,array('label'=>'Адрес'))
            ->add('telephone',null,array('label'=>'Телефон'))
            ->add('cameFrom','sonata_type_model',array('label'=>'Прибыл','required'=>false))
            ->add('cameComment',null,array('label'=>'Комментарий'))
            ->add('leftTo','sonata_type_model',array('label'=>'Выбыл','required'=>false))
            ->add('leftComment',null,array('label'=>'Комментарий'));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('sex')
            ->add('classgroup')
            ->add('nationality')
            ->add('cameFrom')
            ->add('leftTo');
    }
} 