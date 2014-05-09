<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ReportRepository extends EntityRepository
{
    public function persist(School $school, $students)
    {

        $report = new Report();

        $report->setAcademicYear($school->getAcademicYear());
        $report->setQuarter($school->getCurrentQuarter());

        foreach ($students as $student) {

            $rStudent = new ReportStudent();
            $reportTransfer = new ReportTransfer();

            $transfer = $student->getTransfer();

            $rStudent->setAddress($student->getAddress());
            $rStudent->setBirthday($student->getBirthDay());
            $rStudent->setClassGroup($student->getClassGroup()->__toString());
            $rStudent->setFirstname($student->getFirstname());
            $rStudent->setLastname($student->getLastname());
            $rStudent->setNationality($student->getNationality()->getName());
            $rStudent->setPersonalNumber($student->getPersonalNumber());
            $rStudent->setSex($student->getSex());
            $rStudent->setTelephone($student->getTelephone());

            if ($transfer) {
                $reportTransfer->setMoved($transfer->getMoved());
                $reportTransfer->setPlace($transfer->getPlace());
                $reportTransfer->setDate($transfer->getDate());
                $reportTransfer->setTransferLocation($transfer->getTransferLocation());
                $rStudent->setTransfer($reportTransfer);
            }
            $report->addStudent($rStudent);
        }
        foreach ($report->getStudents() as $student) {
            $student->setReport($report);
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
