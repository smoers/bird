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

use ORG\BirdBundle\Model\ExtendFields\ExtendFieldsInterface;
use ORG\BirdBundle\Model\ExtendFields\ExtendValuesInterface;
use ORG\BirdBundle\Model\ExtendFields\LinkFieldsInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * LinkFieldsBook
 *
 * @ORM\Table(name="link_fields_book")
 * @ORM\Entity(repositoryClass="ORG\BirdBundle\Repository\LinkFieldsBookRepository")
 */
class LinkFieldsBook implements LinkFieldsInterface
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
     * @ORM\ManyToOne(targetEntity="ORG\BirdBundle\Entity\Book", inversedBy="linkFieldsBooks")
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="book_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $book;

    /**
     * @var \ORG\BirdBundle\Entity\ExtendValuesBook
     *
     * @ORM\OneToOne(targetEntity="ORG\BirdBundle\Entity\ExtendValuesBook", cascade={"all"})
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="extend_values_book_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $extendValuesBook;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="ORG\BirdBundle\Entity\ExtendFieldsBook")
     */
    
    private $extendFieldsBook;

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
     * @return Book
     */
	public function getBook() {
		return $this->book;
	}

    /**
     * @param Book $book
     * @return $this
     */
	public function setBook(Book $book) {
		$this->book = $book;
		return $this;
	}

    /**
     * @return ExtendValuesBook
     */
	public function getExtendValuesBook() {
		return $this->extendValuesBook;
	}

    /**
     * @param $extendValuesBook
     * @return $this
     */
	public function setExtendValuesBook($extendValuesBook) {
		$this->extendValuesBook = $extendValuesBook;
		return $this;
	}

    /**
     * @return ExtendFieldsBook
     */
	public function getExtendFieldsBook() {
		return $this->extendFieldsBook;
	}

    /**
     * @param $extendFieldsBook
     * @return $this
     */
	public function setExtendFieldsBook($extendFieldsBook) {
		$this->extendFieldsBook = $extendFieldsBook;
		return $this;
	}

    /**
     * @return ExtendValuesBook
     */
    public function getExtendValues()
    {
        return $this->extendValuesBook;
    }

    /**
     * @param ExtendValuesInterface $extendValuesInterface
     */
    public function setExtendValues(ExtendValuesInterface $extendValuesInterface)
    {
        $this->extendValuesBook = $extendValuesInterface;
    }

    /**
     * @return mixed
     */
    public function getExtendFields()
    {
        return $this->extendFieldsBook;
    }

    /**
     * @param ExtendFieldsInterface $extendFieldsInterface
     */
    public function setExtendFields(ExtendFieldsInterface $extendFieldsInterface)
    {
        $this->extendFieldsBook = $extendFieldsInterface;
    }
}

