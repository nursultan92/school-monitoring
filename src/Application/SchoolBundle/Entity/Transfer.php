<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transfer
 */
class Transfer
{
    /**
     * @var integer
     */
    private $id;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Set moved
     *
     * @param string $moved
     * @return Transfer
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
     * @var \Application\SchoolBundle\Entity\TransferLocation
     */
    private $transferLocation;


    /**
     * Set transferLocation
     *
     * @param \Application\SchoolBundle\Entity\TransferLocation $transferLocation
     * @return Transfer
     */
    public function setTransferLocation(\Application\SchoolBundle\Entity\TransferLocation $transferLocation = null)
    {
        $this->transferLocation = $transferLocation;

        return $this;
    }

    /**
     * Get transferLocation
     *
     * @return \Application\SchoolBundle\Entity\TransferLocation
     */
    public function getTransferLocation()
    {
        return $this->transferLocation;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Transfer
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

    public function __toString()
    {
        return $this->place . '';
    }

    /**
     * @var \Application\SchoolBundle\Entity\ClassGroup
     */
    private $classGroup;


    /**
     * Set classGroup
     *
     * @param \Application\SchoolBundle\Entity\ClassGroup $classGroup
     * @return Transfer
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
