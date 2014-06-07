<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/3/14
 * Time: 2:53 PM
 */

namespace Application\SchoolBundle\Form;


use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ReportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('academicYear', 'entity', array(
            'class' => 'Application\SchoolBundle\Entity\AcademicYear',
            'property' => 'year',
            'query_builder' => function (EntityRepository $entityRepository) {
                    return $entityRepository->createQueryBuilder('a')
                        ->orderBy('a.year', 'desc');
                }
        ))
            ->add('quarter', 'entity', array(
                'class' => 'Application\SchoolBundle\Entity\Report',
                'query_builder' => function (EntityRepository $entityRepository) {
                        return $entityRepository->createQueryBuilder('r')
                            ->groupBy('r.academicYear')
                            ->orderBy('r.academicYear', 'desc');
                    },
                'property' => 'quarter'
            ));
    }


    public function getName()
    {
        return "report";
    }
}