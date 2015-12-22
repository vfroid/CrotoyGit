<?php

namespace VF\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VF\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
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
     * @ORM\OneToOne(targetEntity="VF\CrotoyBundle\Entity\Personne")
     * @ORM\JoinColumn(nullable=true)
     */
    private $personne;

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
     * Set personne
     *
     * @param \VF\CrotoyBundle\Entity\Personne $personne
     * @return User
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
