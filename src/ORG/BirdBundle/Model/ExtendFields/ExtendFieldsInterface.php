<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 14/06/2017
 * Time: 12:49
 */

namespace ORG\BirdBundle\Model\ExtendFields;

interface ExtendFieldsInterface
{
    public function getId();

    public function setType($type);

    public function getType();

    public function setName($name);

    public function getName();
}