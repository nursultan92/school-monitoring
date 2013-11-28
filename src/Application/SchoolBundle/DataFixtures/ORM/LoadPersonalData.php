<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Almaz
 * Date: 03.10.13
 * Time: 19:19
 * To change this template use File | Settings | File Templates.
 */

namespace Application\SchoolBundle\DataFixture\ORM;


use Application\SchoolBundle\Entity\Personal;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPersonalData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $teachers = array(array('Памир ','Каразаков'),array('Чынара','Жумабаева'),array('Айбек','Аданбаев'));
        $counter = 0;
        foreach($teachers as $t){
            $teacher = new Personal();
            $teacher->setFirstname($t[0]);
            $teacher->setLastname($t[1]);
            $manager->persist($teacher);
            $manager->flush();
            $this->addReference('personal-'.$counter,$teacher);
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
        return 3;
    }
}