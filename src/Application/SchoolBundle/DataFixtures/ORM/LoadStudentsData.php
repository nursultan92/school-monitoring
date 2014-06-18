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

        $student_information = array(
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-2'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-2'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Азамат',
                "lastname" => 'Курманбеков',
                'personal_number' => 'А-342',
                'sex' => 'М',
                'birthday' => new DateTime('1992-05-23'),
                'address' => "Нарын",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Айкерим',
                "lastname" => 'Муканбетова',
                'personal_number' => 'Т-342',
                'sex' => 'Ж',
                'birthday' => new DateTime('1992-10-26'),
                'address' => "Бишкек",
                "telephone" => '0550234310',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Долон',
                "lastname" => 'Аскарбеков',
                'personal_number' => 'В-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-10-21'),
                'address' => "Миң куш",
                "telephone" => '0772102030',
                'class' => $this->getReference('class-group-1'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алмаз',
                "lastname" => 'Таиров',
                'personal_number' => 'К-123',
                'sex' => 'М',
                'birthday' => new DateTime('1993-11-12'),
                'address' => "Талас",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-0')
            ),
            array(
                'firstname' => 'Алтын',
                "lastname" => 'Рахманов',
                'personal_number' => 'П-302',
                'sex' => 'М',
                'birthday' => new DateTime('1992-02-03'),
                'address' => "Баткен",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Тынчтыкбек',
                "lastname" => 'Ералиев',
                'personal_number' => 'Р-200',
                'sex' => 'М',
                'birthday' => new DateTime('1993-01-03'),
                'address' => "Исфана",
                "telephone" => '0772302040',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-2')
            ),
            array(
                'firstname' => 'Таалай',
                "lastname" => 'Оморов',
                'personal_number' => 'Ц-100',
                'sex' => 'М',
                'birthday' => new DateTime('1992-01-23'),
                'address' => "Кочкор",
                "telephone" => '0543344434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
            array(
                'firstname' => 'Айбек',
                "lastname" => 'Сариев',
                'personal_number' => 'Й-342',
                'sex' => 'М',
                'birthday' => new DateTime('1997-05-23'),
                'address' => "Сузак",
                "telephone" => '0543343434',
                'class' => $this->getReference('class-group-0'),
                'nationality' => $this->getReference('nationality-1')
            ),
        );

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
        return 3;
    }
}