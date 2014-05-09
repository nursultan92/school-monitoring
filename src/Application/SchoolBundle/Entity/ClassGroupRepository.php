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
    public function persist(){
        $classGroups = $this->findAll();

        foreach ($classGroups as $classGroup) {
            $reportClass = new ReportClassPersonal();
            $reportClass->setFirstname($classGroup->getPersonal()->getFirstname());
            $reportClass->setLastname($classGroup->getPersonal()->getLastname());
            $reportClass->setClassGroup($classGroup->__toString());
            $this->_em->persist($reportClass);
            $this->_em->flush();
        }

    }
}
