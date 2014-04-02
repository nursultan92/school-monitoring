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

class ClassGroupData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $class_groups = array(array('A', 1), array('Б', 2), array('А', 11));
        $counter = 0;
        foreach ($class_groups as $class) {
            $class_group = new ClassGroup();
            $class_group->setAlphabet($class[0]);
            $class_group->setGrade($class[1]);
            $class_group->setPersonal($this->getReference('personal-' . $counter));
            $manager->persist($class_group);
            $manager->flush();
            $this->setReference('class-group-' . $counter, $class_group);
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
        return 4;
    }
}