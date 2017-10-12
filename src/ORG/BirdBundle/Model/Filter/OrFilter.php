<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 4/05/2017
 * Time: 12:50
 */

namespace ORG\BirdBundle\Model\Filter;


class OrFilter extends Filter
{
    public function __construct()
    {
        parent::__construct();
        $this->setOperator(FilterInterface::OPERATOR_OR);
    }
}