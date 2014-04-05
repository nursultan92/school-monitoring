<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AcademicYear
 */
class AcademicYear
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $year;


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
     * Set year
     *
     * @param string $year
     * @return AcademicYear
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reports;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reports = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reports
     *
     * @param \Application\SchoolBundle\Entity\Report $reports
     * @return AcademicYear
     */
    public function addReport(\Application\SchoolBundle\Entity\Report $reports)
    {
        $this->reports[] = $reports;

        return $this;
    }

    /**
     * Remove reports
     *
     * @param \Application\SchoolBundle\Entity\Report $reports
     */
    public function removeReport(\Application\SchoolBundle\Entity\Report $reports)
    {
        $this->reports->removeElement($reports);
    }

    /**
     * Get reports
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReports()
    {
        return $this->reports;
    }

    public function __toString()
    {
        return $this->getYear();
    }
}