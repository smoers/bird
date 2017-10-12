<?php

namespace ORG\BirdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtendValuesAuthor
 *
 * @ORM\Table(name="extend_values_author")
 * @ORM\Entity(repositoryClass="ORG\BirdBundle\Repository\ExtendValuesAuthorRepository")
 */
class ExtendValuesAuthor
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
     * @ORM\Column(name="stringvalue", type="string", length=255, nullable=true)
     */
    private $stringvalue;

    /**
     * @var int
     *
     * @ORM\Column(name="numbervalue", type="integer", nullable=true)
     */
    private $numbervalue;

    /**
     * @var string
     *
     * @ORM\Column(name="decimalvalue", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $decimalvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="longtextvalue", type="text", nullable=true)
     */
    private $longtextvalue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datevalue", type="datetime", nullable=true)
     */
    private $datevalue;

    /**
     * @var bool
     *
     * @ORM\Column(name="booleanvalue", type="boolean", nullable=true)
     */
    private $booleanvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="emailvalue", type="string", length=255, nullable=true)
     */
    private $emailvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="urlvalue", type="string", length=255, nullable=true)
     */
    private $urlvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="choicevalue", type="integer", nullable=true)
     */
    private $choicevalue;

    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="datetime")
     */
    private $createdate;
    
    /**
     * @var \ORG\BirdBundle\Entity\LinkFieldsAuthor
     *
     * @ORM\OneToOne(targetEntity="ORG\BirdBundle\Entity\LinkFieldsAuthor", cascade={"persist"})
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="link_extend_author_id", referencedColumnName="id", onDelete="CASCADE")
     * })

     */
    private $linkExtendAuthor;


    public function __construct()
    {
        $this->createdate =  new \DateTime();
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
     * Set stringvalue
     *
     * @param string $stringvalue
     *
     * @return ExtendValuesAuthor
     */
    public function setStringvalue($stringvalue)
    {
        $this->stringvalue = $stringvalue;

        return $this;
    }

    /**
     * Get stringvalue
     *
     * @return string
     */
    public function getStringvalue()
    {
        return $this->stringvalue;
    }

    /**
     * Set numbervalue
     *
     * @param integer $numbervalue
     *
     * @return ExtendValuesAuthor
     */
    public function setNumbervalue($numbervalue)
    {
        $this->numbervalue = $numbervalue;

        return $this;
    }

    /**
     * Get numbervalue
     *
     * @return int
     */
    public function getNumbervalue()
    {
        return $this->numbervalue;
    }

    /**
     * Set decimalvalue
     *
     * @param string $decimalvalue
     *
     * @return ExtendValuesAuthor
     */
    public function setDecimalvalue($decimalvalue)
    {
        $this->decimalvalue = $decimalvalue;

        return $this;
    }

    /**
     * Get decimalvalue
     *
     * @return string
     */
    public function getDecimalvalue()
    {
        return $this->decimalvalue;
    }

    /**
     * Set longtextvalue
     *
     * @param string $longtextvalue
     *
     * @return ExtendValuesAuthor
     */
    public function setLongtextvalue($longtextvalue)
    {
        $this->longtextvalue = $longtextvalue;

        return $this;
    }

    /**
     * Get longtextvalue
     *
     * @return string
     */
    public function getLongtextvalue()
    {
        return $this->longtextvalue;
    }

    /**
     * Set datevalue
     *
     * @param \DateTime $datevalue
     *
     * @return ExtendValuesAuthor
     */
    public function setDatevalue($datevalue)
    {
        $this->datevalue = $datevalue;

        return $this;
    }

    /**
     * Get datevalue
     *
     * @return \DateTime
     */
    public function getDatevalue()
    {
        return $this->datevalue;
    }

    /**
     * @return bool
     */
    public function getBooleanvalue()
    {
        return $this->booleanvalue;
    }

    /**
     * @param bool $booleanvalue
     */
    public function setBooleanvalue($booleanvalue)
    {
        $this->booleanvalue = $booleanvalue;
    }

    /**
     * @return string
     */
    public function getEmailvalue()
    {
        return $this->emailvalue;
    }

    /**
     * @param string $emailvalue
     */
    public function setEmailvalue($emailvalue)
    {
        $this->emailvalue = $emailvalue;
    }

    /**
     * @return string
     */
    public function getUrlvalue()
    {
        return $this->urlvalue;
    }

    /**
     * @param string $urlvalue
     */
    public function setUrlvalue($urlvalue)
    {
        $this->urlvalue = $urlvalue;
    }

    /**
     * @return string
     */
    public function getChoicevalue()
    {
        return $this->choicevalue;
    }

    /**
     * @param string $choicevalue
     */
    public function setChoicevalue($choicevalue)
    {
        $this->choicevalue = $choicevalue;
    }



	public function getCreatedate() {
		return $this->createdate;
	}
	public function setCreatedate(\DateTime $createdate) {
		$this->createdate = $createdate;
		return $this;
	}
	public function getLinkExtendAuthor() {
		return $this->linkExtendAuthor;
	}
	public function setLinkExtendAuthor($linkExtendAuthor) {
		$this->linkExtendAuthor = $linkExtendAuthor;
		return $this;
	}
}

