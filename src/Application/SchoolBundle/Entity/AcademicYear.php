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
}