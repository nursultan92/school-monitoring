<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/5/14
 * Time: 1:02 PM
 */

namespace Application\SchoolBundle\DataFixture\ORM;


use Application\SchoolBundle\Entity\Quarter;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadQuarterData extends AbstractFixture implements OrderedFixtureInterface
{

    function load(ObjectManager $manager)
    {
        $quarters = array(1, 2, 3, 4);

        foreach ($quarters as $q) {
            $quarter = new Quarter();
            $quarter->setName($q);

            $manager->persist($quarter);
            $manager->flush();

            $this->addReference('quarter-' . $q, $quarter);
        }


    }


    function getOrder()
    {
        return 1;
    }


} 