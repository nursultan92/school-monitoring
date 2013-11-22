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

class ClassGroupAdmin  extends Admin{

    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->add('grade','choice',array('label'=>'Класс','choices'=>array(1=>1,2,3,4,5,6,7,8,9,10,11)))
            ->add('alphabet',null,array('label'=>'Алфавить'))
            ->add('personal','sonata_type_model',array('label'=>'Классный руководитель'));
            //->add('students','sonata_type_collection',array(),array('edit'=>'inline','inline'=>'table','position'=>'sortable'));

    }

    protected function configureListFields(ListMapper $listMapper){

        $listMapper
            ->add('id',null,array('label'=>'ID'))
            ->addIdentifier('grade',null,array('label'=>'Класс'))
            ->addIdentifier('alphabet',null,array('label'=>'Серия класса'))
            ->addIdentifier('personal',null,array('label'=>'Классный руководитель'));
    }
}