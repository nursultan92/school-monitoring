<?php
/**
 * Created by PhpStorm.
 * User: Almaz
 * Date: 28.11.13
 * Time: 1:39
 */

namespace Application\SchoolBundle\DataFixture\ORM;


use Application\SchoolBundle\Entity\ClassGroup;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadClassGroupData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $alphabets = array('А', "Б");
        $counter = 0;
        for ($i = 1; $i < 12; $i++)
            foreach ($alphabets as $alphabet) {
                $group = new ClassGroup();
                $group->setAlphabet($alphabet);
                $group->setGrade($i);
                $group->setPersonal($this->getReference('personal-' . $counter));
                $manager->persist($group);
                $manager->flush();
                $this->setReference('class-group-' . $counter, $group);
                $counter++;
            }
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 2;
    }
}