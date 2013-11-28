<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Almaz
 * Date: 03.10.13
 * Time: 19:19
 * To change this template use File | Settings | File Templates.
 */

namespace Application\SchoolBundle\DataFixture\ORM;


use Application\SchoolBundle\Entity\Nationality;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadNationalityData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $nationalities = array("Кыргыз","Тажик","Узбек","Дунган","Татар","Уйгур");
        $counter = 0;
        foreach($nationalities as $nationality){
            $nation = new Nationality();
            $nation->setName($nationality);
            $manager->persist($nation);
            $manager->flush();
            $this->addReference('nationality-'.$counter,$nation);
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
        return 1;
    }
}