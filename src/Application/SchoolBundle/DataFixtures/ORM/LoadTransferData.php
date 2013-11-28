<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Almaz
 * Date: 03.10.13
 * Time: 19:19
 * To change this template use File | Settings | File Templates.
 */

namespace Application\SchoolBundle\DataFixture\ORM;


use Application\SchoolBundle\Entity\Transfer;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTransferData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $places = array("Район","Город","Республика","СНГ","Дальнее зарубежье","Внутри школы","Работали","1 класс","Другие причины");
        $counter = 0;
        foreach($places as $place){
            $transfer = new Transfer();
            $transfer->setPlace($place);
            $manager->persist($transfer);
            $manager->flush();
            $this->addReference('transfer-'.$counter,$transfer);
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