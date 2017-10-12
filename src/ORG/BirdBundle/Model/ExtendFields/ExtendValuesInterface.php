<?php
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