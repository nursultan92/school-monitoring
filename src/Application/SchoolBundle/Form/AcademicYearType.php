<?php

namespace Application\SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AcademicYearType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'year',
                'entity',
                array('property' => 'year', 'class' => 'Application\SchoolBundle\Entity\AcademicYear', 'label' => 'Год')
            )
            ->add('submit', 'submit', array('label' => 'Найти'));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Application\SchoolBundle\Entity\AcademicYear',
                'translation_domain'=>'messages.ru.yml'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application_schoolbundle_academicyear';
    }
}
