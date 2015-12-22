<?php

namespace VF\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use VF\CrotoyBundle\Entity\sejour;

/**
 * Booking
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VF\BookingBundle\Entity\BookingRepository")
 */
class Booking
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="date")
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="date")
     */
    private $end;

	/**
     * @ORM\OneToOne(targetEntity="VF\CrotoyBundle\Entity\sejour", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
	private $sejour;

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
     * Set start
     *
     * @param \DateTime $start
     * @return Booking
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

  
    public function setSejour(\VF\CrotoyBundle\Entity\sejour $sejour)
    {
        $this->sejour = $sejour;

        return $this;
    }

    /**
     * Get sejour
     *
     * @return \VF\CrotoyBundle\Entity\sejour 
     */
    public function getSejour()
    {
        return $this->sejour;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return Booking
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }
}
