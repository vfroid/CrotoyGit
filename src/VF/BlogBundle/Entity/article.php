<?php

namespace VF\BlogBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VF\BlogBundle\Entity\articleRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class article
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
     * @ORM\Column(name="titre", type="string", length=255)
	 * @Assert\Length(min=3)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=60)
	 * @ORM\JoinColumn(nullable=true)
     */
    private $auteur;

    /**
     * @ORM\ManyToMany(targetEntity="VF\BlogBundle\Entity\Category", cascade={"persist"})
     */
    private $categories;
	
	/**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=255)
	 * @Assert\Length(min=3)
     */
    private $texte;
	
	/**
     * @ORM\OneToOne(targetEntity="VF\BlogBundle\Entity\Image", cascade={"persist","remove"})
    */
    private $image;
	
	/**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
	 * @Assert\Length(min=2)
     */
    private $etat;
	
	/**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=true)
	 * @Assert\Length(min=3)
     */
    private $tags;
	
	/**
     * @ORM\Column(type="datetime")
    */
    protected $updated;
	

     public function __construct()
    {
        $this->date = new \DateTime("now");
		$this->categories = new ArrayCollection();
		$this->setUpdated(new \DateTime());
		$this->tag='';
		$this->etat='Soumis';
    }
	
	
	/**
     * @ORM\preUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
    }
	
	
	// Notez le singulier, on ajoute une seule catégorie à la fois
    public function addCategory(Category $category)
    {
		// Ici, on utilise l'ArrayCollection vraiment comme un tableau
        $this->categories[] = $category;
		return $this;
	}

	public function removeCategory(Category $category)
	{
		// Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
		$this->categories->removeElement($category);
	}

	// Notez le pluriel, on récupère une liste de catégories ici !
	public function getCategories()
	{
		return $this->categories;
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
     * Set titre
     *
     * @param string $titre
     * @return article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return article
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
     * Set auteur
     *
     * @param string $auteur
     * @return article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    

    /**
     * Set texte
     *
     * @param string $texte
     * @return article
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set image
     *
     * @param \VF\BlogBundle\Entity\Image $image
     * @return article
     */
    public function setImage(\VF\BlogBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \VF\BlogBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return article
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return article
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return article
     */
    public function setEtat( $etat = null)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
