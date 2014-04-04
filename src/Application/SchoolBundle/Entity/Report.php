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
    private $quarter;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\SchoolBundle\Entity\AcademicYear
     */
    private $academicYear;


    /**
     * Set quarter
     *
     * @param integer $quarter
     * @return Report
     */
    public function setQuarter($quarter)
    {
        $this->quarter = $quarter;

        return $this;
    }

    /**
     * Get quarter
     *
     * @return integer
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

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
}