<?php

namespace VF\CrotoyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use VF\CrotoyBundle\Entity\Personne;

/**
 * sejour
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VF\CrotoyBundle\Entity\sejourRepository")
 */
class sejour
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="VF\CrotoyBundle\Entity\Personne")
     * @ORM\JoinColumn(nullable=false)
	 * @Assert\NotNull()
     */
    private $personne;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nadulte", type="integer")
     */
    private $nadulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="Njeunes", type="integer")
     */
    private $njeunes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="date")
     * @Assert\DateTime()
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date")
     * @Assert\DateTime()
     */
    private $fin;

    public function __construct()
    {
        $this->debut = new \DateTime();
	    $this->fin = new \DateTime();
        $this->nadulte= 0;
        $this->njeunes= 0;
		$this->personne=0;
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
     * Set nadulte
     *
     * @param integer $nadulte
     * @return sejour
     */
    public function setNadulte($nadulte)
    {
        $this->nadulte = $nadulte;

        return $this;
    }

    /**
     * Get nadulte
     *
     * @return integer 
     */
    public function getNadulte()
    {
        return $this->nadulte;
    }

    /**
     * Set njeunes
     *
     * @param integer $njeunes
     * @return sejour
     */
    public function setNjeunes($njeunes)
    {
        $this->njeunes = $njeunes;

        return $this;
    }

    /**
     * Get njeunes
     *
     * @return integer 
     */
    public function getNjeunes()
    {
        return $this->njeunes;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     * @return sejour
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return sejour
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set personne
     *
     * @param \VF\CrotoyBundle\Entity\Personne $personne
     * @return sejour
     */
    public function setPersonne(\VF\CrotoyBundle\Entity\Personne $personne)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \VF\CrotoyBundle\Entity\Personne 
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
