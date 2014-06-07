<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * School
 */
class School
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $currentQuarter;


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
     * Set name
     *
     * @param string $name
     * @return School
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set currentQuarter
     *
     * @param integer $currentQuarter
     * @return School
     */
    public function setCurrentQuarter($currentQuarter)
    {
        $this->currentQuarter = $currentQuarter;

        return $this;
    }

    /**
     * Get currentQuarter
     *
     * @return integer
     */
    public function getCurrentQuarter()
    {
        return $this->currentQuarter;
    }

    /**
     * @var \Application\SchoolBundle\Entity\Personal
     */
    private $principal;

    /**
     * @var \Application\SchoolBundle\Entity\AcademicYear
     */
    private $academicYear;


    /**
     * Set principal
     *
     * @param \Application\SchoolBundle\Entity\Personal $principal
     * @return School
     */
    public function setPrincipal(\Application\SchoolBundle\Entity\Personal $principal = null)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal
     *
     * @return \Application\SchoolBundle\Entity\Personal
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Set academicYear
     *
     * @param \Application\SchoolBundle\Entity\AcademicYear $academicYear
     * @return School
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

    public function __toString()
    {
        return $this->name;
    }
}
