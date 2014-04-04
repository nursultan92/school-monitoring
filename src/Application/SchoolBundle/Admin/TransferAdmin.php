<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.04.14
 * Time: 10:28
 */

namespace Application\SchoolBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TransferAdmin extends Admin
{

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('date', 'date', array('years' => range(date('Y') - 3, date('Y'))))
            ->add('moved', 'choice', array(
                'choices' => array('Выбыл' => 'Выбыл', 'Прибыл' => 'Прибыл'),
                'required' => false
            ))
            ->add('place', null);
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('moved')
            ->add('place')
            ->add('transferLocation');
    }
} 