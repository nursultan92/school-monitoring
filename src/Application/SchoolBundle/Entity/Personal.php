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
     * @var \Application\SchoolBundle\Entity\ClassGroup
     */
    private $classgroup;

    /**
     * @var integer
     */
    private $id;


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
     * Set classgroup
     *
     * @param \Application\SchoolBundle\Entity\ClassGroup $classgroup
     * @return Personal
     */
    public function setClassgroup(\Application\SchoolBundle\Entity\ClassGroup $classgroup = null)
    {
        $this->classgroup = $classgroup;

        return $this;
    }

    /**
     * Get classgroup
     *
     * @return \Application\SchoolBundle\Entity\ClassGroup
     */
    public function getClassgroup()
    {
        return $this->classgroup;
    }

    public function __toString()
    {
        return $this->getLastname() . ' ' . $this->getFirstname();
    }
}
