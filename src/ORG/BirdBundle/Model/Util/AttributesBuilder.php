<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 5/03/2018
 * Time: 13:15
 */

namespace ORG\BirdBundle\Model\Util;


use Doctrine\Common\Collections\ArrayCollection;
use ORG\BirdBundle\Model\Elements\Attribute;

class AttributesBuilder
{

    protected $attributes;

    /**
     * AttributesBuilder constructor.
     */
    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getCollection()
    {
        $collection = new ArrayCollection();
        if (is_array($this->attributes)){
            foreach ($this->attributes as $name => $value) {
                $attribute = new Attribute();
                $attribute->setName($name);
                $attribute->setValue($value);
                $collection->add($attribute);
            }
        }
        return $collection;
    }

    public function getArray(){

        $array = array();
        if($this->attributes instanceof ArrayCollection){
            $array = $this->attributes->toArray();
        }
        return $array;
    }
}