<?php

namespace VF\CrotoyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Personne
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VF\CrotoyBundle\Entity\PersonneRepository")
 */
class Personne
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60)
     * @Assert\Length(min=2)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=60)
     * @Assert\Length(min=2)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datene", type="date")
     * @Assert\DateTime()
     */
    private $datene;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=1)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=60)
     * @Assert\Regex(
     *     pattern="/(fm)/",
     *     match=false,
     *     message="Choisir entre f ou m."
     * )
     */

    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10)
     * @Assert\Length(min=2)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="cp", type="integer")
     * @Assert\NotBlank()
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=60)
     * @Assert\Length(min=2)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=60)
     * @Assert\Length(min=2)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=50)
     * @Assert\Length(min=8)
     */
    private $tel1;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=50)
     * @Assert\Length(min=2)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="courriel", type="string", length=100)
     * @Assert\Email()
     */
    private $courriel;


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
     * Set nom
     *
     * @param string $nom
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datene
     *
     * @param \DateTime $datene
     * @return Personne
     */
    public function setDatene($datene)
    {
        $this->datene = $datene;

        return $this;
    }

    /**
     * Get datene
     *
     * @return \DateTime 
     */
    public function getDatene()
    {
        return $this->datene;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Personne
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set rue
     *
     * @param string $rue
     * @return Personne
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string 
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Personne
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     * @return Personne
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Personne
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Personne
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

   

    /**
     * Set courriel
     *
     * @param string $courriel
     * @return Personne
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;

        return $this;
    }

    /**
     * Get courriel
     *
     * @return string 
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     * @return Personne
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string 
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     * @return Personne
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string 
     */
    public function getTel2()
    {
        return $this->tel2;
    }
}
