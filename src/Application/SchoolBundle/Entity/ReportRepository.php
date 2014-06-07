<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ReportRepository extends EntityRepository
{
    public function persist(School $school, $classes)
    {

        $report = new Report();

        $report->setAcademicYear($school->getAcademicYear());
        $report->setQuarter($school->getCurrentQuarter());


        foreach ($classes as $class) {

            $rClass = new ReportClass();

            $rClass->setReport($report);
            $rClass->setName($class->__toString());
            $rClass->setFirstname($class->getPersonal()->getFirstname());
            $rClass->setLastname($class->getPersonal()->getLastname());

            foreach ($class->getStudents() as $student) {
                $rClass->addStudent($student->toReportStudent($rClass));
            }

            $report->addReportClass($rClass);
        }
        $em = $this->getEntityManager();
        $em->persist($report);
        $em->flush();

        return true;
    }

    public function findQuarters(AcademicYear $academicYear)
    {
        $quarters = array();
        $reports = $this->findByAcademicYear($academicYear);

        foreach ($reports as $report) {
            $quarters[] = $report->getQuarter()->getName();
        }

        return $quarters;
    }
}
