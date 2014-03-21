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
                'birthday' => new DateTime('1996-05-21'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ],
            ['firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'А-200',
                'sex' => 'М',
                'birthday' => new DateTime('1999-02-23'),
                'address' => "Нарын",
                "telephone" => '0555676776',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ],
            ['firstname' => 'Алмазбек',
                "lastname" => 'Таиров',
                'personal_number' => 'А-400',
                'sex' => 'М',
                'birthday' => new DateTime('2000-12-01'),
                'address' => "Нарын",
                "telephone" => '0772643776',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-1')
            ],
            ['firstname' => 'Алтынбек',
                "lastname" => 'Рахманов',
                'personal_number' => 'А-450',
                'sex' => 'М',
                'birthday' => new DateTime('2002-07-10'),
                'address' => "Нарын",
                "telephone" => '0778888989',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-2')
            ],
            ['firstname' => 'Медер',
                "lastname" => 'Бактыбеков',
                'personal_number' => 'А-503',
                'sex' => 'М',
                'birthday' => new DateTime('2003-10-26'),
                'address' => "Нарын",
                "telephone" => '0555676776',
                'class' => $this->getReference('class-group-2'),
                'nationality' => $this->getReference('nationality-3')
            ],
            ['firstname' => 'Автандил',
                "lastname" => 'Осмонов',
                'personal_number' => 'В-142',
                'sex' => 'Ж',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-2'),
                'nationality' => $this->getReference('nationality-0')
            ],
            ['firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'В-242',
                'sex' => 'Ж',
                'birthday' => new DateTime('2001-12-23'),
                'address' => "Нарын",
                "telephone" => '0543454534',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ],
            ['firstname' => 'Жазгуль',
                "lastname" => 'Зуридинова',
                'personal_number' => 'В-222',
                'sex' => 'Ж',
                'birthday' => new DateTime('1999-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ]
            ,
            ['firstname' => 'Асель',
                "lastname" => 'Салайдин',
                'personal_number' => 'С-242',
                'sex' => 'Ж',
                'birthday' => new DateTime('2001-01-03'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-1'),
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