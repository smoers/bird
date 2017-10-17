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
 * Date: 14/06/2017
 * Time: 12:44
 */

namespace ORG\BirdBundle\Model\ExtendFields;


/**
 * Interface ExtendValuesInterface
 * @package ORG\BirdBundle\Model\ExtendFields
 */
interface ExtendValuesInterface
{
    /**
     * Get id
     *
     * @return int
     */
    public function getId();

    /**
     * Set stringvalue
     *
     * @param string $stringvalue
     */
    public function setStringvalue($stringvalue);

    /**
     * Get stringvalue
     *
     * @return string
     */
    public function getStringvalue();

    /**
     * Set numbervalue
     *
     * @param integer $numbervalue
     */
    public function setNumbervalue($numbervalue);

    /**
     * Get numbervalue
     *
     * @return int
     */
    public function getNumbervalue();

    /**
     * Set decimalvalue
     *
     * @param string $decimalvalue
     */
    public function setDecimalvalue($decimalvalue);

    /**
     * Get decimalvalue
     *
     * @return string
     */
    public function getDecimalvalue();

    /**
     * Set longtextvalue
     *
     * @param string $longtextvalue
     */
    public function setLongtextvalue($longtextvalue);

    /**
     * Get longtextvalue
     *
     * @return string
     */
    public function getLongtextvalue();

    /**
     * Set datevalue
     *
     * @param \DateTime $datevalue
     */
    public function setDatevalue($datevalue);

    /**
     * Get datevalue
     *
     * @return \DateTime
     */
    public function getDatevalue();
}