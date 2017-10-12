<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 14/06/2017
 * Time: 12:50
 */

namespace ORG\BirdBundle\Model\ExtendFields;


/**
 * Interface LinkFieldsInterface
 * @package ORG\BirdBundle\Model\ExtendFields
 */
interface LinkFieldsInterface
{
    /**
     * Get id
     *
     * @return int
     */
    public function getId();

    public function getExtendValues();

    public function setExtendValues(ExtendValuesInterface $extendValuesInterface);

    public function getExtendFields();

    public function setExtendFields(ExtendFieldsInterface $extendFieldsInterface);
}