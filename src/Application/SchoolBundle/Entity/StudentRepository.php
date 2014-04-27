<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/6/14
 * Time: 9:41 PM
 */

namespace Application\SchoolBundle\Entity;


use Doctrine\ORM\EntityRepository;

class StudentRepository extends EntityRepository
{

    public function byYear(ClassGroup $classGroup)
    {

        return $this->getEntityManager()
            ->createQuery("select year(st.birthday) as y,sum( case when (st.sex='М') then 1 else 0 end ) as male, sum(case when (st.sex='Ж') then 1 else 0 end) as female, count(st.id) as total from ApplicationSchoolBundle:Student st join st.classgroup cg where cg = :g group by y order by y asc")->setParameter('g', $classGroup)
            ->getResult();
    }

    public function byNationality(ClassGroup $classGroup)
    {
        return $this->getEntityManager()
            ->createQuery("select n.name,sum( case when (st.sex='М') then 1 else 0 end ) as male, sum(case when (st.sex='Ж') then 1 else 0 end) as female, count(st.id) as total from ApplicationSchoolBundle:Student st join st.classgroup cg join st.nationality as n where cg = :g  group by n.name order by n.name asc")->setParameter('g', $classGroup)
            ->getResult();
    }

    public function extract($moved)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('s')
            ->from('Application\SchoolBundle\Entity\Student', 's')
            ->join('s.transfer ', 't')
            ->where('t.moved = :moved')
            ->setParameter('moved', $moved)
            ->getQuery()->getResult();

    }

    public function wholeReport()
    {
        return $this->getEntityManager()
            ->createQuery("select g.grade,
                count(s.id) as amount,
                sum(case when(tl.place='Из школ района' and t.moved= 'Прибыл' ) then 1 else 0 end) as prayon,
                sum(case when(tl.place='Из школ города'  and t.moved= 'Прибыл' ) then 1 else 0 end) as pgorod,
                sum(case when(tl.place='Из республики' and t.moved= 'Прибыл' ) then 1 else 0 end) as prespubliki,
                sum(case when(tl.place='Из-за рубежа' and t.moved= 'Прибыл' ) then 1 else 0 end) as prubej,
                sum(case when(tl.place='Из СНГ' and t.moved= 'Прибыл' ) then 1 else 0 end) as psng,
                sum(case when(tl.place='Внутри' and t.moved= 'Прибыл' ) then 1 else 0 end) as pvnutri,
                sum(case when(tl.place='Работали' and t.moved= 'Прибыл' ) then 1 else 0 end) as prabotali,
                sum(case when(tl.place='1 класс' and t.moved= 'Прибыл' ) then 1 else 0 end) as pklass,
                sum(case when(tl.place='Другие причины' and t.moved= 'Прибыл' ) then 1 else 0 end) as pdrugie,
                sum(case when(tl.place is not null and t.moved= 'Прибыл' ) then 1 else 0 end) as pall,

                sum(case when(tl.place='Из школ района' and t.moved= 'Выбыл' ) then 1 else 0 end) as vrayon,
                sum(case when(tl.place='Из школ города'  and t.moved= 'Выбыл' ) then 1 else 0 end) as vgorod,
                sum(case when(tl.place='Из республики' and t.moved= 'Выбыл' ) then 1 else 0 end) as vrespubliki,
                sum(case when(tl.place='Из-за рубежа' and t.moved= 'Выбыл' ) then 1 else 0 end) as vrubej,
                sum(case when(tl.place='Из СНГ' and t.moved= 'Выбыл' ) then 1 else 0 end) as vsng,
                sum(case when(tl.place='Внутри' and t.moved= 'Выбыл' ) then 1 else 0 end) as vvnutri,
                sum(case when(tl.place='Работали' and t.moved= 'Выбыл' ) then 1 else 0 end) as vrabotali,
                sum(case when(tl.place='1 класс' and t.moved= 'Выбыл' ) then 1 else 0 end) as vklass,
                sum(case when(tl.place='Другие причины' and t.moved= 'Выбыл' ) then 1 else 0 end) as vdrugie,
                sum(case when(tl.place is not null and t.moved= 'Выбыл' ) then 1 else 0 end) as vall,
                sum(case when (s.sex='М') then 1 else 0 end) as malchiki,
                sum(case when (s.sex='Ж') then 1 else 0 end) as devochki
                from ApplicationSchoolBundle:Student as s join s.classgroup as g left join s.transfer as t left join t.transferLocation as tl group by g")
            ->getResult();
    }
} 