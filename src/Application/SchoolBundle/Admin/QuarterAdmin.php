<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/5/14
 * Time: 12:57 PM
 */

namespace Application\SchoolBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class QuarterAdmin extends Admin
{

    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('name');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->add('name');
    }

} 