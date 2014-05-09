<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportTransfer
 */
class ReportTransfer
{
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
     * @var integer
     */
    private $id;

    /**
     * @var \Application\SchoolBundle\Entity\TransferLocation
     */
    private $transferLocation;


    /**
     * Set place
     *
     * @param string $place
     * @return ReportTransfer
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
     * @return ReportTransfer
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
     * @return ReportTransfer
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set transferLocation
     *
     * @param \Application\SchoolBundle\Entity\TransferLocation $transferLocation
     * @return ReportTransfer
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
}
