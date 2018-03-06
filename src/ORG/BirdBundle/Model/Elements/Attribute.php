<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 5/03/2018
 * Time: 13:11
 */

namespace ORG\BirdBundle\Model\Elements;


class Attribute
{

    protected $name = null;
    protected $value = null;
    /**
     * Attribute constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }



}