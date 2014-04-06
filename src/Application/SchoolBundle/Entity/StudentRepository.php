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
            ->createQuery("select year(st.birthday) as y,sum( case when (st.sex='М') then 1 else 0 end ) as male, sum(case when (st.sex='Ж') then 1 else 0 end) as female from ApplicationSchoolBundle:Student st join st.classgroup cg where cg = :g group by y order by y asc")->setParameter('g', $classGroup)
            ->getResult();
    }

} 