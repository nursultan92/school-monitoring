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

class TransferAdmin  extends Admin{

    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->add('place','text',array('label'=>'Место'));
    }
    protected function configureListFields(ListMapper $listMapper){
        $listMapper->add('id',null,array('label'=>'ID'))
            ->addIdentifier('place',null,array('label'=>'Место'));
    }
} 