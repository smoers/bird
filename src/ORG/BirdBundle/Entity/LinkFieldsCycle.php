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
 * LinkFieldsCycle
 *
 * @ORM\Table(name="link_fields_cycle")
 * @ORM\Entity(repositoryClass="ORG\BirdBundle\Repository\LinkFieldsCycleRepository")
 */
class LinkFieldsCycle implements LinkFieldsInterface
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
     * @ORM\ManyToOne(targetEntity="ORG\BirdBundle\Entity\Cycle", inversedBy="linkFieldsCycles")
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="cycle_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $cycle;

    /**
     * @var \ORG\BirdBundle\Entity\ExtendValuesCycle
     *
     * @ORM\OneToOne(targetEntity="ORG\BirdBundle\Entity\ExtendValuesCycle", cascade={"all"})
     * @ORM\JoinColumns({
     *	 @ORM\JoinColumn(name="extend_values_cycle_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $extendValuesCycle;

    /**
     *
     * @ORM\ManyToOne(targetEntity="ORG\BirdBundle\Entity\ExtendFieldsCycle")
     */
    private $extendFieldsCycle;

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
     * @return Cycle
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
     * @return ExtendValuesCycle
     */
	public function getExtendValuesCycle() {
		return $this->extendValuesCycle;
	}

    /**
     * @param $extendValuesCycle
     * @return $this
     */
	public function setExtendValuesCycle($extendValuesCycle) {
		$this->extendValuesCycle = $extendValuesCycle;
		return $this;
	}

    /**
     * @return ExtendFieldsCycle
     */
	public function getExtendFieldsCycle() {
		return $this->extendFieldsCycle;
	}

    /**
     * @param $extendFieldsCycleI
     * @return $this
     */
	public function setExtendFieldsCycle($extendFieldsCycle) {
		$this->extendFieldsCycle = $extendFieldsCycle;
		return $this;
	}

    public function getExtendValues()
    {
        return $this->extendValuesCycle;
    }

    public function setExtendValues(ExtendValuesInterface $extendValuesInterface)
    {
        $this->extendValuesCycle = $extendValuesInterface;
    }

    public function getExtendFields()
    {
        return $this->extendFieldsCycle;
    }

    public function setExtendFields(ExtendFieldsInterface $extendFieldsInterface)
    {
        $this->extendFieldsCycle = $extendFieldsInterface;
    }
}

