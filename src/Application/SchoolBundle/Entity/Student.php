<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 */
class Student
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
     * @var string
     */
    private $personalNumber;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $cameComment;

    /**
     * @var string
     */
    private $cameDate;

    /**
     * @var string
     */
    private $leftComment;

    /**
     * @var string
     */
    private $leftDate;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\SchoolBundle\Entity\ClassGroup
     */
    private $classgroup;

    /**
     * @var \Application\SchoolBundle\Entity\Transfer
     */
    private $cameFrom;

    /**
     * @var \Application\SchoolBundle\Entity\Transfer
     */
    private $leftTo;

    /**
     * @var \Application\SchoolBundle\Entity\Nationality
     */
    private $nationality;


    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Student
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
     * @return Student
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
     * Set personalNumber
     *
     * @param string $personalNumber
     * @return Student
     */
    public function setPersonalNumber($personalNumber)
    {
        $this->personalNumber = $personalNumber;
    
        return $this;
    }

    /**
     * Get personalNumber
     *
     * @return string 
     */
    public function getPersonalNumber()
    {
        return $this->personalNumber;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return Student
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    
        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Student
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Student
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Student
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set cameComment
     *
     * @param string $cameComment
     * @return Student
     */
    public function setCameComment($cameComment)
    {
        $this->cameComment = $cameComment;
    
        return $this;
    }

    /**
     * Get cameComment
     *
     * @return string 
     */
    public function getCameComment()
    {
        return $this->cameComment;
    }

    /**
     * Set cameDate
     *
     * @param string $cameDate
     * @return Student
     */
    public function setCameDate($cameDate)
    {
        $this->cameDate = $cameDate;
    
        return $this;
    }

    /**
     * Get cameDate
     *
     * @return string 
     */
    public function getCameDate()
    {
        return $this->cameDate;
    }

    /**
     * Set leftComment
     *
     * @param string $leftComment
     * @return Student
     */
    public function setLeftComment($leftComment)
    {
        $this->leftComment = $leftComment;
    
        return $this;
    }

    /**
     * Get leftComment
     *
     * @return string 
     */
    public function getLeftComment()
    {
        return $this->leftComment;
    }

    /**
     * Set leftDate
     *
     * @param string $leftDate
     * @return Student
     */
    public function setLeftDate($leftDate)
    {
        $this->leftDate = $leftDate;
    
        return $this;
    }

    /**
     * Get leftDate
     *
     * @return string 
     */
    public function getLeftDate()
    {
        return $this->leftDate;
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
     * @return Student
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

    /**
     * Set cameFrom
     *
     * @param \Application\SchoolBundle\Entity\Transfer $cameFrom
     * @return Student
     */
    public function setCameFrom(\Application\SchoolBundle\Entity\Transfer $cameFrom = null)
    {
        $this->cameFrom = $cameFrom;
    
        return $this;
    }

    /**
     * Get cameFrom
     *
     * @return \Application\SchoolBundle\Entity\Transfer 
     */
    public function getCameFrom()
    {
        return $this->cameFrom;
    }

    /**
     * Set leftTo
     *
     * @param \Application\SchoolBundle\Entity\Transfer $leftTo
     * @return Student
     */
    public function setLeftTo(\Application\SchoolBundle\Entity\Transfer $leftTo = null)
    {
        $this->leftTo = $leftTo;
    
        return $this;
    }

    /**
     * Get leftTo
     *
     * @return \Application\SchoolBundle\Entity\Transfer 
     */
    public function getLeftTo()
    {
        return $this->leftTo;
    }

    /**
     * Set nationality
     *
     * @param \Application\SchoolBundle\Entity\Nationality $nationality
     * @return Student
     */
    public function setNationality(\Application\SchoolBundle\Entity\Nationality $nationality = null)
    {
        $this->nationality = $nationality;
    
        return $this;
    }

    /**
     * Get nationality
     *
     * @return \Application\SchoolBundle\Entity\Nationality 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    public function __toString()
    {
        return ($this->getFirstname()) ? $this->getFirstname() . ' ' . $this->getLastname() : 'Новый студент';
    }
}
