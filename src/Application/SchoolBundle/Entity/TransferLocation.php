<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransferLocation
 */
class TransferLocation
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
     * Set place
     *
     * @param string $place
     * @return TransferLocation
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
}