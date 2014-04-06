<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/6/14
 * Time: 11:18 PM
 */

namespace Application\SchoolBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ClassGroupType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('grade', 'entity', array('class' => 'Application\SchoolBundle\Entity\ClassGroup', 'property' => 'grade'));
    }


    public function getName()
    {
        return 'school_class_group';
    }
}