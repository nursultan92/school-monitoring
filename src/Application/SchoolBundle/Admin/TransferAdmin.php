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
            ->add('transferLocation')
            ->add(
                'moved',
                'choice',
                array(
                    'choices' => array('Выбыл' => 'Выбыл', 'Прибыл' => 'Прибыл'),
                    'required' => false
                )
            )
            ->add('place', null)
            ->add('date', 'date', array('years' => range(date('Y') - 3, date('Y')), 'required' => false));
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('moved')
            ->add('place')
            ->add('transferLocation');
    }
} 