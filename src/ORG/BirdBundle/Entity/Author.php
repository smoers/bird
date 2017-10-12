<?php

namespace ORG\BirdBundle\Entity;

use ORG\BirdBundle\ORG\BirdBundle;
use ORG\BirdBundle\Model\ExtendFields\ExtendField;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Author
 *
 * REMARQUE : le variable extendFields contient la liste des Extend Fields
 * dans un format utilisable pour permettre la modification des valeurs dans
 * le formulaire d'ajout ou de modification
 *
 * @ORM\Table(name="author")
 * @ORM\Entity(repositoryClass="ORG\BirdBundle\Repository\AuthorRepository")
 */
class Author implements \JsonSerializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="born_lastname", type="string", length=255, nullable=true)
     */
    private $bornLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="born_firstname", type="string", length=255, nullable=true)
     */
    private $bornFirstname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="image", type="boolean", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="biography", type="text", nullable=true)
     */
    private $biography;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=500, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="borndate", type="date", nullable=true)
     */
    private $borndate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deathdate", type="date", nullable=true)
     */
    private $deathdate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="datetime")
     */
    private $createdate;
    
    /**
     * @var ORG\BirdBundle\Entity\Cycle
     * 
     * @ORM\ManyToMany(targetEntity="ORG\BirdBundle\Entity\Cycle", cascade={"persist"})
     */
    private $cycles;
    
    
    /**
     * @var ORG\BirdBundle\Entity\LinkFieldsAuthor
     *
     * @ORM\OneToMany(targetEntity="ORG\BirdBundle\Entity\LinkFieldsAuthor", mappedBy="author", cascade={"all"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=false)
     */
    private $linkFieldsAuthors;

    /**
     * Utilisé pour simplifier la gestion des Extend Field sur le formulaire
     *
     * @var array
     */
    private $extendFields;
    
    /**
     * Constructor
     */
    public function __construct(){
    	$this->cycles = new ArrayCollection();
    	$this->linkFieldsAuthors = new ArrayCollection();
    	$this->extendFields = new ArrayCollection();
    	$this->createdate =  new \DateTime();
    	$this->image = false;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Author
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Author
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
     * Set bornLastname
     *
     * @param string $bornLastname
     *
     * @return Author
     */
    public function setBornLastname($bornLastname)
    {
        $this->bornLastname = $bornLastname;

        return $this;
    }

    /**
     * Get bornLastname
     *
     * @return string
     */
    public function getBornLastname()
    {
        return $this->bornLastname;
    }

    /**
     * Set bornFirstname
     *
     * @param string $bornFirstname
     *
     * @return Author
     */
    public function setBornFirstname($bornFirstname)
    {
        $this->bornFirstname = $bornFirstname;

        return $this;
    }

    /**
     * Get bornFirstname
     *
     * @return string
     */
    public function getBornFirstname()
    {
        return $this->bornFirstname;
    }

    /**
     * Set image
     *
     * @param boolean $image
     *
     * @return Author
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return boolean
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set biography
     *
     * @param string $biography
     *
     * @return Author
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;

        return $this;
    }

    /**
     * Get biography
     *
     * @return string
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Author
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set borndate
     *
     * @param \DateTime $borndate
     *
     * @return Author
     */
    public function setBorndate($borndate)
    {
        $this->borndate = $borndate;

        return $this;
    }

    /**
     * Get borndate
     *
     * @return \DateTime
     */
    public function getBorndate()
    {
        return $this->borndate;
    }
	
	/**
	 *
	 * @return \DateTime
	 */
	public function getDeathdate() {
		return $this->deathdate;
	}
	
	/**
	 *
	 * @param \DateTime $deathdate        	
	 */
	public function setDeathdate($deathdate) {
		$this->deathdate = $deathdate;
		return $this;
	}
	
    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     *
     * @return Author
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Ajout un objet Cycle à la liste
     * @param Cycle $cycle
     */
    public function addCycle(Cycle $cycle){
        $cycle->addAuthor($this);
    	if(!$this->cycles->contains($cycle)){
    		$this->cycles->add($cycle);
    	}
    	
    }

    /**
     * Supprime un objet Cycle de la liste
     * @param Cycle $cycle
     */
    public function removeCycle(Cycle $cycle){
    	$this->cycles->removeElement($cycle);
    }

    /**
     * Retourne un tableau avec la liste des Cycles
     * @return ORG\BirdBundle\Entity\Cycle|ArrayCollection
     */
    public function getCycles(){
    	return $this->cycles;
    }

    /**
     * @param LinkFieldsAuthor $linkFieldsAuthor
     */
    public function addLinkfieldsauthor(LinkFieldsAuthor $linkFieldsAuthor){
    	$linkFieldsAuthor->setAuthor($this);
    	if(!$this->linkFieldsAuthors->contains($linkFieldsAuthor)){
    		$this->linkFieldsAuthors->add($linkFieldsAuthor);
    	}
    	
    }

    /**
     * @param LinkFieldsAuthor $linkFieldsAuthor
     */
    public function removeLinkfieldsauthor(LinkFieldsAuthor $linkFieldsAuthor){
    	$this->linkFieldsAuthors->removeElement($linkFieldsAuthor);

    }

    /**
     * @return ORG\BirdBundle\Entity\LinkFieldsAuthor|ArrayCollection
     */
    public function getLinkfieldsauthors(){
    	return $this->linkFieldsAuthors;
    }

    /**
     * Est utilisé pour construire le formulaire
     * Retourne la liste des objets Extend Field
     * @return ORG\BirdBundle\Modal\ExtendFields\ExtendField|ArrayCollection
     */
    public function getExtendFields()
    {
        return $this->extendFields;
    }

    /**
     * Retourne un table utilisé par le format JSON
     * @return array
     */
    public function jsonSerialize()
    {
    	return array(
    		'biography' => $this->getBiography(),
            'borndate' => $this->getBorndate(),
            'bornfirstname' => $this->getBornFirstname(),
            'bornlastname' => $this->getBornLastname(),
            'comment' => $this->getComment(),
            'createdate' => $this->getCreatedate(),
            'deathdate' => $this->getDeathdate(),
            'firstname' => $this->getFirstname(),
            'lastname' => $this->getLastname(),
            'id' => $this->getId()
    	);
    }
}

