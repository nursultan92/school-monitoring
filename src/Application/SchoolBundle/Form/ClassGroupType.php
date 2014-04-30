<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/6/14
 * Time: 11:18 PM
 */

namespace Application\SchoolBundle\Form;


use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ClassGroupType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('grade', 'entity',
            array(
                'class' => 'Application\SchoolBundle\Entity\ClassGroup',
                'query_builder' => function (EntityRepository $entityRepository) {
                        return $entityRepository->createQueryBuilder('g')
                            ->groupBy('g.grade')
                            ->orderBy('g.grade', 'ASC');
                    },
                'property' => 'grade',
                'translation_domain' => 'ApplicationSchoolBundle'))
            ->add('alphabet', 'entity',
                array(
                    'class' => 'Application\SchoolBundle\Entity\ClassGroup',
                    'query_builder' => function (EntityRepository $entityRepository) {
                            return $entityRepository->createQueryBuilder('a')
                                ->where('a.grade = 1')
                                ->orderBy('a.alphabet', 'ASC');
                        },
                    'property' => 'alphabet',
                    'label' => 'Серия',
                    'attr' => array('class' => 'form-control alphabet')
                ));
    }


    public function getName()
    {
        return 'school_class_group';
    }
}