<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transfer
 */
class Transfer
{
    /**
     * @var string
     */
    private $place;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $studentCame;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $studentLeft;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->studentCame = new \Doctrine\Common\Collections\ArrayCollection();
        $this->studentLeft = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set place
     *
     * @param string $place
     * @return Transfer
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
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
     * Add studentCame
     *
     * @param \Application\SchoolBundle\Entity\Student $studentCame
     * @return Transfer
     */
    public function addStudentCame(\Application\SchoolBundle\Entity\Student $studentCame)
    {
        $this->studentCame[] = $studentCame;
    
        return $this;
    }

    /**
     * Remove studentCame
     *
     * @param \Application\SchoolBundle\Entity\Student $studentCame
     */
    public function removeStudentCame(\Application\SchoolBundle\Entity\Student $studentCame)
    {
        $this->studentCame->removeElement($studentCame);
    }

    /**
     * Get studentCame
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudentCame()
    {
        return $this->studentCame;
    }

    /**
     * Add studentLeft
     *
     * @param \Application\SchoolBundle\Entity\Student $studentLeft
     * @return Transfer
     */
    public function addStudentLeft(\Application\SchoolBundle\Entity\Student $studentLeft)
    {
        $this->studentLeft[] = $studentLeft;
    
        return $this;
    }

    /**
     * Remove studentLeft
     *
     * @param \Application\SchoolBundle\Entity\Student $studentLeft
     */
    public function removeStudentLeft(\Application\SchoolBundle\Entity\Student $studentLeft)
    {
        $this->studentLeft->removeElement($studentLeft);
    }

    /**
     * Get studentLeft
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudentLeft()
    {
        return $this->studentLeft;
    }

    public function __toString()
    {
        return ($this->getPlace()) ? $this->getPlace() : 'Новый трансфер';
    }
}
