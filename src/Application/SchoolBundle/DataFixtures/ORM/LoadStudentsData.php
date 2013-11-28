<?php
/**
 * Created by PhpStorm.
 * User: Almaz
 * Date: 28.11.13
 * Time: 1:35
 */

namespace Application\SchoolBundle\DataFixture\ORM;


use Application\SchoolBundle\Entity\Student;
use DateTime;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadStudentsData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $student_information = [
            ['firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ]
        ];

        foreach ($student_information as $info) {
            $st = new Student();
            $st->setFirstname($info['firstname']);
            $st->setLastname($info['lastname']);
            $st->setPersonalNumber($info['personal_number']);
            $st->setSex($info['sex']);
            $st->setBirthday($info['birthday']);
            $st->setAddress($info['address']);
            $st->setTelephone($info['telephone']);
            $st->setClassgroup($info['class']);
            $st->setNationality($info['nationality']);
            $manager->persist($st);
            $manager->flush();
        }
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 5;
    }
}