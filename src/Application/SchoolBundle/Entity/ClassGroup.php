<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClassGroup
 */
class ClassGroup
{
    /**
     * @var integer
     */
    private $grade;

    /**
     * @var string
     */
    private $alphabet;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $students;

    /**
     * @var \Application\SchoolBundle\Entity\Personal
     */
    private $personal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set grade
     *
     * @param integer $grade
     * @return ClassGroup
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    
        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set alphabet
     *
     * @param string $alphabet
     * @return ClassGroup
     */
    public function setAlphabet($alphabet)
    {
        $this->alphabet = $alphabet;
    
        return $this;
    }

    /**
     * Get alphabet
     *
     * @return string 
     */
    public function getAlphabet()
    {
        return $this->alphabet;
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
     * Add students
     *
     * @param \Application\SchoolBundle\Entity\Student $students
     * @return ClassGroup
     */
    public function addStudent(\Application\SchoolBundle\Entity\Student $students)
    {
        $this->students[] = $students;
    
        return $this;
    }

    /**
     * Remove students
     *
     * @param \Application\SchoolBundle\Entity\Student $students
     */
    public function removeStudent(\Application\SchoolBundle\Entity\Student $students)
    {
        $this->students->removeElement($students);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set personal
     *
     * @param \Application\SchoolBundle\Entity\Personal $personal
     * @return ClassGroup
     */
    public function setPersonal(\Application\SchoolBundle\Entity\Personal $personal = null)
    {
        $this->personal = $personal;
    
        return $this;
    }

    /**
     * Get personal
     *
     * @return \Application\SchoolBundle\Entity\Personal 
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    public function __toString()
    {
        return $this->getGrade() . '-'.  $this->getAlphabet();
    }
//
//    public function getNationStat(){
//        $stat =array();
//        foreach($this->getStudents() as $student){
//            $stat[$student->getNationality()] = $student->getNationality()->count();
//        }
//        return $stat;
//    }
}
