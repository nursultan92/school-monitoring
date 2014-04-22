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
} 