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

/**
 * ExtendValuesAuthor
 *
 * @ORM\Table(name="extend_values_cycle")
 * @ORM\Entity(repositoryClass="ORG\BirdBundle\Repository\ExtendValuesCycleRepository")
 */
class ExtendValuesCycle
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
     * @ORM\Column(name="datevalue", type="date", nullable=true)
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
     * @var \ORG\BirdBundle\Entity\LinkFieldsCycle
     *
     * @ORM\OneToOne(targetEntity="ORG\BirdBundle\Entity\LinkFieldsCycle", cascade={"persist"})
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="link_extend_cycle_id", referencedColumnName="id", onDelete="CASCADE")
     * })

     */
    private $linkExtendCycle;

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
     * @return ExtendValuesCycle
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
     * @return ExtendValuesCycle
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
     * @return ExtendValuesCycle
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
     * @return ExtendValuesCycle
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
     * @return ExtendValuesCycle
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
    public function getLinkExtendCycle() {
        return $this->linkExtendCycle;
    }
    public function setLinkExtendCycle($linkExtendCycle) {
        $this->linkExtendCycle = $linkExtendCycle;
        return $this;
    }
}

