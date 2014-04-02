<?php

namespace Application\SchoolBundle\Entity;

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
     * @var integer
     */
    private $report;


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
     * Set report
     *
     * @param integer $report
     * @return Report
     */
    public function setReport($report)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return integer
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * @var \Application\SchoolBundle\Entity\AcademicYear
     */
    private $academicYear;


    /**
     * Set academicYear
     *
     * @param \Application\SchoolBundle\Entity\AcademicYear $academicYear
     * @return Report
     */
    public function setAcademicYear(\Application\SchoolBundle\Entity\AcademicYear $academicYear = null)
    {
        $this->academicYear = $academicYear;

        return $this;
    }

    /**
     * Get academicYear
     *
     * @return \Application\SchoolBundle\Entity\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->academicYear;
    }
}