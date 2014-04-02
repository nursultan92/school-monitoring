<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personal
 */
class Personal
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $classgroups;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classgroups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Personal
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Personal
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
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
     * Add classgroups
     *
     * @param \Application\SchoolBundle\Entity\ClassGroup $classgroups
     * @return Personal
     */
    public function addClassgroup(\Application\SchoolBundle\Entity\ClassGroup $classgroups)
    {
        $this->classgroups[] = $classgroups;

        return $this;
    }

    /**
     * Remove classgroups
     *
     * @param \Application\SchoolBundle\Entity\ClassGroup $classgroups
     */
    public function removeClassgroup(\Application\SchoolBundle\Entity\ClassGroup $classgroups)
    {
        $this->classgroups->removeElement($classgroups);
    }

    /**
     * Get classgroups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClassgroups()
    {
        return $this->classgroups;
    }

    public function __toString()
    {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }
}