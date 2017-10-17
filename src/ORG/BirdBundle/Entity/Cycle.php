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

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cycle
 *
 * @ORM\Table(name="cycle")
 * @ORM\Entity(repositoryClass="ORG\BirdBundle\Repository\CycleRepository")
 */
class Cycle
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
     * @var bool
     *
     * @ORM\Column(name="yncycle", type="boolean", nullable=true)
     */
    private $yncycle;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrvolume", type="smallint", nullable=true)
     */
    private $nbrvolume;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=500, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="datetime")
     */
    private $createdate;
    
    /**
     * @var ORG\BirdBundle\Entity\Author
     * 
     * @ORM\ManyToMany(targetEntity="ORG\BirdBundle\Entity\Author", cascade={"persist"})
     */
    private $authors;
    
    /**
     * @var ORG\BirdBundle\Entity\Book
     *
     * @ORM\OneToMany(targetEntity="ORG\BirdBundle\Entity\Book", mappedBy="cycle", cascade={"all"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=false)
     */
    private $books;

    /**
     *
     * @ORM\ManyToOne(targetEntity="ORG\BirdBundle\Entity\System", cascade={"persist"})
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var ORG\BirdBundle\Entity\LinkFieldsCycle
     *
     * @ORM\OneToMany(targetEntity="ORG\BirdBundle\Entity\LinkFieldsCycle", mappedBy="cycle", cascade={"all"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=false)
     */
    private $linkFieldsCycles;
    
    /**
     * Contructor
     */
    public function __construct(){
    	$this->authors = new ArrayCollection();
    	$this->books = new ArrayCollection();
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
     * @return Cycle
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
     * Set yncycle
     *
     * @param boolean $yncycle
     *
     * @return Cycle
     */
    public function setYncycle($yncycle)
    {
        $this->yncycle = $yncycle;

        return $this;
    }

    /**
     * Get yncycle
     *
     * @return bool
     */
    public function getYncycle()
    {
        return $this->yncycle;
    }

    /**
     * Set nbrvolume
     *
     * @param integer $nbrvolume
     *
     * @return Cycle
     */
    public function setNbrvolume($nbrvolume)
    {
        $this->nbrvolume = $nbrvolume;

        return $this;
    }

    /**
     * Get nbrvolume
     *
     * @return int
     */
    public function getNbrvolume()
    {
        return $this->nbrvolume;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Cycle
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
     * Set createdate
     *
     * @param \DateTime $createdate
     *
     * @return Cycle
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
     * @param Author $author
     */
    public function addAuthor(Author $author){
        //$author->addCycle($this);
    	if(!$this->authors->contains($author)){
    		$this->authors->add($author);
    	}
    }

    /**
     * @param Author $author
     */
    public function removeAuthor(Author $author){
    	$this->authors->removeElement($author);
    }

    /**
     * @param Book $book
     */
    public function addBook(Book $book){
    	$book->setCycle($this);
    	if(!$this->books->contains($book)){
    		$this->books->add($book);
    	}
    }

    /**
     * @param Book $book
     */
    public function removeBook(Book $book){
    	$this->books->removeElement($book);
    }

    /**
     * @return ORG\BirdBundle\Entity\Author|ArrayCollection
     */
	public function getAuthors() {
		return $this->authors;
	}

    /**
     * @return ORG\BirdBundle\Entity\Book|ArrayCollection
     */
	public function getBooks() {
		return $this->books;
	}

    /**
     * @return mixed
     */
	public function getType() {
		return $this->type;
	}

    /**
     * @param System $type
     * @return $this
     */
	public function setType(System $type) {
		$this->type = $type;
		return $this;
	}

    /**
     * @param LinkFieldsAuthor $linkFieldsAuthor
     */
    public function addLinkfieldscycle(LinkFieldsCycle $linkFieldsCycle){
        $linkFieldsCycle->setCycle($this);
        if(!$this->linkFieldsCycles->contains($linkFieldsCycle)){
            $this->linkFieldsCycles->add($linkFieldsCycle);
        }

    }

    /**
     * @param LinkFieldsCycle $linkFieldsCycle
     */
    public function removeLinkfieldscycle(LinkFieldsCycle $linkFieldsCycle){
        $this->linkFieldsCycles->removeElement($linkFieldsCycle);

    }

    /**
     * @return ORG\BirdBundle\Entity\LinkFieldsCycle|ArrayCollection
     */
    public function getLinkfieldscycles(){
        return $this->linkFieldsCycles;
    }
	    
}

