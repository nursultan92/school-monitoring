<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.14
 * Time: 13:45
 */

namespace Application\SchoolBundle\DataFixture\ORM;


use Application\SchoolBundle\Entity\AcademicYear;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AcademicYearData extends AbstractFixture implements OrderedFixtureInterface
{


    function load(ObjectManager $manager)
    {
        $years = array('2010-2011', '2011-2012', '2012-2013', '2013-2014');

        foreach ($years as $year) {
            $academicYear = new AcademicYear();
            $academicYear->setYear($year);

            $manager->persist($academicYear);
            $manager->flush();
        }
    }

    function getOrder()
    {
        return 1;
    }
}