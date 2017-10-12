<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 4/05/2017
 * Time: 12:44
 */

namespace ORG\BirdBundle\Model\Filter;


class AndFilter extends Filter
{
    public function __construct()
    {
        parent::__construct();
        $this->setOperator(FilterInterface::OPERATOR_AND);
    }
}