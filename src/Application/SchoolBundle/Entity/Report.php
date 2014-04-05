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
     * @var \Application\SchoolBundle\Entity\ClassGroup
     */
    private $classGroup;


    /**
     * Set classGroup
     *
     * @param \Application\SchoolBundle\Entity\ClassGroup $classGroup
     * @return Report
     */
    public function setClassGroup(\Application\SchoolBundle\Entity\ClassGroup $classGroup = null)
    {
        $this->classGroup = $classGroup;

        return $this;
    }

    /**
     * Get classGroup
     *
     * @return \Application\SchoolBundle\Entity\ClassGroup
     */
    public function getClassGroup()
    {
        return $this->classGroup;
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