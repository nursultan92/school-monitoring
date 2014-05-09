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
     * @var \Application\SchoolBundle\Entity\AcademicYear
     */
    private $academicYear;

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

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $students;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add students
     *
     * @param \Application\SchoolBundle\Entity\ReportStudent $students
     * @return Report
     */
    public function addStudent(\Application\SchoolBundle\Entity\ReportStudent $students)
    {
        $this->students[] = $students;

        return $this;
    }

    /**
     * Remove students
     *
     * @param \Application\SchoolBundle\Entity\ReportStudent $students
     */
    public function removeStudent(\Application\SchoolBundle\Entity\ReportStudent $students)
    {
        $this->students->removeElement($students);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @var \Application\SchoolBundle\Entity\Quarter
     */
    private $quarter;


    /**
     * Set quarter
     *
     * @param \Application\SchoolBundle\Entity\Quarter $quarter
     * @return Report
     */
    public function setQuarter(\Application\SchoolBundle\Entity\Quarter $quarter = null)
    {
        $this->quarter = $quarter;

        return $this;
    }

    /**
     * Get quarter
     *
     * @return \Application\SchoolBundle\Entity\Quarter
     */
    public function getQuarter()
    {
        return $this->quarter;
    }
}
