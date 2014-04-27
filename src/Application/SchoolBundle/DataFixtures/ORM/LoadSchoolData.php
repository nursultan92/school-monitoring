<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/5/14
 * Time: 1:08 PM
 */

namespace Application\SchoolBundle\DataFixture\ORM;


use Application\SchoolBundle\Entity\School;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadSchoolData extends AbstractFixture implements OrderedFixtureInterface
{
    function load(ObjectManager $manager)
    {
        $school = new School();
        $school->setName('№ 28');
        $school->setCurrentQuarter($this->getReference('quarter-3'));
        $school->setAcademicYear($this->getReference('academicyear-3'));
        $school->setPrincipal($this->getReference('personal-1'));

        $manager->persist($school);
        $manager->flush();

    }

    function getOrder()
    {
        return 3;
    }

} 