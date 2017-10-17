<?php
/**
 * Copyright (c) 2017.  Bird Web
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace ORG\BirdBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use ORG\BirdBundle\BirdBundle;
use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="ORG\BirdBundle\Repository\BookRepository")
 */
class Book
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
     * @ORM\Column(name="title", type="string", length=500)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="volume", type="integer")
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", nullable=true)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=255, nullable=true)
     */
    private $cover;

    /**
     * @var string
     *
     * @ORM\Column(name="editor", type="string", length=255, nullable=true)
     */
    private $editor;

    /**
     * @var string
     *
     * @ORM\Column(name="collection", type="string", length=255, nullable=true)
     */
    private $collection;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=100, nullable=true)
     */
    private $isbn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="image", type="boolean", nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="datetime")
     */
    private $createdate;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="ORG\BirdBundle\Entity\Cycle", inversedBy="books")
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="cycle_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $cycle;

    /**
     *
     * @ORM\ManyToOne(targetEntity="ORG\BirdBundle\Entity\System", cascade={"persist"})
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="format_id", referencedColumnName="id")
     * })
     */
    private $format;

    /**
     * @var ORG\BirdBundle\Entity\LinkFieldsBook
     *
     * @ORM\OneToMany(targetEntity="ORG\BirdBundle\Entity\LinkFieldsBook", mappedBy="book", cascade={"all"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=false)
     */
    private $linkFieldsBooks;

    /**
     * Book constructor.
     */
    public function __construct()
    {
        $this->linkFieldsBooks = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     *
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get Volume
     *
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set Volume
     *
     * @param int $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return Book
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set cover
     *
     * @param string $cover
     *
     * @return Book
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set editor
     *
     * @param string $editor
     *
     * @return Book
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return string
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set collection
     *
     * @param string $collection
     *
     * @return Book
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;

        return $this;
    }

    /**
     * Get collection
     *
     * @return string
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     *
     * @return Book
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @return bool
     */
    public function isImage()
    {
        return $this->image;
    }

    /**
     * @param bool $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     *
     * @return Book
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
     * @return ORG\BirdBundle/Entity/Cycle
     */
	public function getCycle() {
		return $this->cycle;
	}

    /**
     * @param $cycle
     * @return $this
     */
	public function setCycle($cycle) {
		$this->cycle = $cycle;
		return $this;
	}

    /**
     * @return System
     */
	public function getFormat() {
		return $this->format;
	}

    /**
     * @param System $format
     * @return $this
     */
	public function setFormat(System $format) {
		$this->format = $format;
		return $this;
	}

    /**
     * @param LinkFieldsAuthor $linkFieldsBook
     */
    public function addLinkfieldsbook(LinkFieldsBook $linkFieldsBook){
        $linkFieldsBook->setBook($this);
        if(!$this->linkFieldsBooks->contains($linkFieldsBook)){
            $this->linkFieldsBooks->add($linkFieldsBook);
        }

    }

    /**
     * @param LinkFieldsAuthor $linkFieldsBook
     */
    public function removeLinkfieldsbook(LinkFieldsBook $linkFieldsBook){
        $this->linkFieldsBooks->removeElement($linkFieldsBook);

    }

    /**
     * @return ORG\BirdBundle\Entity\LinkFieldsBook|ArrayCollection
     */
    public function getLinkfieldsbooks(){
        return $this->linkFieldsBooks;
    }
	
}

