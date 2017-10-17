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

