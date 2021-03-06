<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GlassGroupRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClassGroupRepository extends EntityRepository
{
    public function persist()
    {
        $classGroups = $this->findAll();

        $i = 1;
        /*@var $classGroup ClassGroup*/
        foreach ($classGroups as $classGroup) {

            $reportClass = new ReportClass();
            $reportClass->setFirstname($classGroup->getPersonal()->getFirstname());
            $reportClass->setLastname($classGroup->getPersonal()->getLastname());
            $reportClass->setName($classGroup->__toString());

            $this->getEntityManager()->persist($reportClass);

            if ($i++ % 25 == 0) {
                $this->getEntityManager()->flush();
                $this->getEntityManager()->clear();
            }
        }
        $this->getEntityManager()->flush();

    }

    public function upgrade()
    {
        $classes = $this->findAll();

        /* @var $class ClassGroup */
        $i = 1;
        foreach ($classes as $class) {
            if ($class->getGrade() == 11) {
                $this->getEntityManager()->remove($class);
            } else {

                $class->setGrade($class->getGrade() + 1);
                $this->getEntityManager()->persist($class);
            }
            if ($i++ % 25 == 0) {
                $this->getEntityManager()->flush();
                $this->getEntityManager()->clear();
            }
        }
        $this->getEntityManager()->flush();
    }
}
