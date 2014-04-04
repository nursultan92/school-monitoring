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

class PersonalAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('firstname');
        $formMapper->add('lastname');
        $formMapper->add('classgroup');

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('firstname')
            ->addIdentifier('lastname')
            ->add('classgroup');
    }
} 