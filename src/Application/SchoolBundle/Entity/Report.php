<?php

namespace Application\SchoolBundle\Entity;

use Application\SchoolBundle\Entity\AcademicYear;
use Application\SchoolBundle\Entity\Quarter;
use Application\SchoolBundle\Entity\ReportClass;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 */
class Report
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var AcademicYear
     */
    private $academicYear;

    /**
     * @var Quarter
     */
    private $quarter;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set academicYear
     *
     * @param AcademicYear $academicYear
     * @return Report
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->academicYear = $academicYear;

        return $this;
    }

    /**
     * Get academicYear
     *
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->academicYear;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $students;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->students = new ArrayCollection();
    }


    /**
     * Set quarter
     *
     * @param Quarter $quarter
     * @return Report
     */
    public function setQuarter(Quarter $quarter = null)
    {
        $this->quarter = $quarter;

        return $this;
    }

    /**
     * Get quarter
     *
     * @return Quarter
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reportClass;


    /**
     * Add reportClass
     *
     * @param ReportClass $reportClass
     * @return Report
     */
    public function addReportClass(ReportClass $reportClass)
    {
        $this->reportClass[] = $reportClass;

        return $this;
    }

    /**
     * Remove reportClass
     *
     * @param ReportClass $reportClass
     */
    public function removeReportClass(ReportClass $reportClass)
    {
        $this->reportClass->removeElement($reportClass);
    }

    /**
     * Get reportClass
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReportClass()
    {
        return $this->reportClass;
    }
}
