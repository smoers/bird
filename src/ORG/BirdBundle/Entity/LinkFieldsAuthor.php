<?php

namespace ORG\BirdBundle\Entity;

use ORG\BirdBundle\ORG\BirdBundle;
use ORG\BirdBundle\Model\ExtendFields\ExtendFieldsInterface;
use ORG\BirdBundle\Model\ExtendFields\ExtendValuesInterface;
use ORG\BirdBundle\Model\ExtendFields\LinkFieldsInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * LinkFieldsAuthor
 *
 * @ORM\Table(name="link_fields_author")
 * @ORM\Entity(repositoryClass="ORG\BirdBundle\Repository\LinkFieldsAuthorRepository")
 */
class LinkFieldsAuthor implements LinkFieldsInterface
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
     *
     * @ORM\ManyToOne(targetEntity="ORG\BirdBundle\Entity\Author", inversedBy="linkFieldsAuthors")
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="author_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $author;
    
    /**
     * @var \ORG\BirdBundle\Entity\ExtendValuesAuthor
     *
     * @ORM\OneToOne(targetEntity="ORG\BirdBundle\Entity\ExtendValuesAuthor", cascade={"all"})
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="extend_values_author_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $extendValuesAuthor;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="ORG\BirdBundle\Entity\ExtendFieldsAuthor")
     */
    
    private $extendFieldsAuthor;

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
     * @return Author
     */
	public function getAuthor() {
		return $this->author;
	}

    /**
     * @param $author
     * @return $this
     */
	public function setAuthor(Author $author) {
		$this->author = $author;
		return $this;
	}

    /**
     * @return ExtendValuesAuthor
     */
	public function getExtendValuesAuthor() {
		return $this->extendValuesAuthor;
	}

    /**
     * @param ExtendValuesAuthor $extendValuesAuthor
     * @return $this
     */
	public function setExtendValuesAuthor(ExtendValuesAuthor $extendValuesAuthor) {
        $extendValuesAuthor->setLinkExtendAuthor($this);
		$this->extendValuesAuthor = $extendValuesAuthor;
		return $this;
	}

    /**
     * @return ExtendFieldsAuthor
     */
	public function getExtendFieldsAuthor() {
		return $this->extendFieldsAuthor;
	}

    /**
     * @param ExtendFieldsAuthor $extendFieldsAuthor
     * @return $this
     */
	public function setExtendFieldsAuthor(ExtendFieldsAuthor $extendFieldsAuthor) {
		$this->extendFieldsAuthor = $extendFieldsAuthor;
		return $this;
	}

    /**
     * @return ExtendValuesAuthor
     */
    public function getExtendValues()
    {
        return $this->extendValuesAuthor;
    }

    public function setExtendValues(ExtendValuesInterface $extendValuesInterface)
    {
        // TODO: Implement setExtendValues() method.
    }

    /**
     * @return mixed
     */
    public function getExtendFields()
    {
        return $this->extendFieldsAuthor;
    }

    public function setExtendFields(ExtendFieldsInterface $extendFieldsInterface)
    {
        // TODO: Implement setExtendFields() method.
    }
}

