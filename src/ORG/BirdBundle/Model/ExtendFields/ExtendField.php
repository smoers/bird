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
 * Created by PhpStorm.
 * User: a49974
 * Date: 13/06/2017
 * Time: 13:14
 */
namespace ORG\BirdBundle\Model\ExtendFields;
use phpDocumentor\Reflection\Types\Integer;


/**
 * Class ExtendField
 * @package ORG\BirdBundle\Model\ExtendFields
 */
class ExtendField
{
    private $linkFields;

    public function __construct(LinkFieldsInterface $linkFields)
    {
        $this->linkFields = $linkFields;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->linkFields->getExtendFields()->getName();
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        $type = $this->linkFields->getExtendFields()->getType();
        $methodName = 'get'.ucfirst(strtolower($type)).'value';
        return $this->linkFields->getExtendValues()->$methodName();
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $type = $this->linkFields->getExtendFields()->getType();
        $methodName = 'set'.ucfirst(strtolower($type)).'value';
        $this->linkFields->getExtendValues()->$methodName($value);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->linkFields->getExtendFields()->getType();
    }

    /**
     * @return Int
     */
    public function getIdField()
    {
        return $this->linkFields->getExtendFields()->getId();
    }

    /**
     * @return int
     */
    public function getIdValue()
    {
        return $this->linkFields->getExtendValues()->getId();
    }


}