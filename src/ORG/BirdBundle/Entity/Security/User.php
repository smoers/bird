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

/**
* User.php
* Sabena Aerospace
* Author : Moers Serge
* Date : 31 Mar 2017
*/

namespace ORG\BirdBundle\Entity\Security;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use ORG\BirdBundle\Model\Elements\Attribute;
use ORG\BirdBundle\Model\Util\AttributesBuilder;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\ManyToMany(targetEntity="ORG\BirdBundle\Entity\Security\Group")
	 * @ORM\JoinTable(name="fos_user_user_group",
	 *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
	 *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
	 * )
	 */
	protected $groups;

    /**
     * @var array
     *
     * @ORM\Column(name="attributes", type="json_array", nullable=true)
     */
	protected $attributes;

    /**
     * @var ArrayCollection
     */
	protected $attributesCollection;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", nullable=false)
     */
	protected $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", nullable=false)
     */
	protected $firstname;

	public function __construct()
	{
		parent::__construct();
		$this->attributes = array();
		$this->attributesCollection = new ArrayCollection();
		// your own logic
	}

    public function setLocked($boolean)
    {
        // TODO: Implement setLocked() method.
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        $attributesBuilder = new AttributesBuilder($attributes);
        $this->attributesCollection = $attributesBuilder->getCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getAttributesCollection()
    {
        $attributesBuilder = new AttributesBuilder($this->attributes);
        $this->attributesCollection = $attributesBuilder->getCollection();
        return $this->attributesCollection;
    }

    /**
     * @param Attribute $attribute
     */
    public function addAttributesCollection(Attribute $attribute){
        if(!$this->attributesCollection->contains($attribute)){
            $this->attributesCollection->add($attribute);
            $attributesBuilder = new AttributesBuilder($this->attributesCollection);
            $this->attributes = $attributesBuilder->getArray();
        }
    }

    public function removeAttributesCollection(Attribute $attribute){
        $this->attributesCollection->removeElement($attribute);
        $attributesBuilder = new AttributesBuilder($this->attributesCollection);
        $this->attributes = $attributesBuilder->getArray();
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }



}