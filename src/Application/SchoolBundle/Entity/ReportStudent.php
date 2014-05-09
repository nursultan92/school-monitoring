<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportStudent
 */
class ReportStudent
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
     * @var integer
     */
    private $id;

    /**
     * @var \Application\SchoolBundle\Entity\Nationality
     */
    private $nationality;


    /**
     * Set firstname
     *
     * @param string $firstname
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var string
     */
    private $classGroup;


    /**
     * Set classGroup
     *
     * @param string $classGroup
     * @return ReportStudent
     */
    public function setClassGroup($classGroup)
    {
        $this->classGroup = $classGroup;

        return $this;
    }

    /**
     * Get classGroup
     *
     * @return string
     */
    public function getClassGroup()
    {
        return $this->classGroup;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return ReportStudent
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }
    /**
     * @var \Application\SchoolBundle\Entity\ReportClass
     */
    private $reportClass;


    /**
     * Set reportClass
     *
     * @param \Application\SchoolBundle\Entity\ReportClass $reportClass
     * @return ReportStudent
     */
    public function setReportClass(\Application\SchoolBundle\Entity\ReportClass $reportClass = null)
    {
        $this->reportClass = $reportClass;

        return $this;
    }

    /**
     * Get reportClass
     *
     * @return \Application\SchoolBundle\Entity\ReportClass 
     */
    public function getReportClass()
    {
        return $this->reportClass;
    }
    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $moved;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $placeLocation;


    /**
     * Set place
     *
     * @param string $place
     * @return ReportStudent
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
     * Set moved
     *
     * @param string $moved
     * @return ReportStudent
     */
    public function setMoved($moved)
    {
        $this->moved = $moved;

        return $this;
    }

    /**
     * Get moved
     *
     * @return string 
     */
    public function getMoved()
    {
        return $this->moved;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ReportStudent
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set placeLocation
     *
     * @param string $placeLocation
     * @return ReportStudent
     */
    public function setPlaceLocation($placeLocation)
    {
        $this->placeLocation = $placeLocation;

        return $this;
    }

    /**
     * Get placeLocation
     *
     * @return string 
     */
    public function getPlaceLocation()
    {
        return $this->placeLocation;
    }
}
