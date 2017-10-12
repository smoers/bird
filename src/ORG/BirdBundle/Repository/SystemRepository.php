<?php

namespace ORG\BirdBundle\Repository;

use ORG\BirdBundle\Model\Filter\FilterInterface;
use ORG\BirdBundle\Model\OrderBy\OrderByInterface;

/**
 * SystemRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SystemRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * Retourne un Objet QueryBuilder filtré et trié sur base des objets passés en parametre
     * @param FilterInterface $filter
     * @param OrderByInterface $orderBy
     * @return mixed
     */
    public function getQueryBuilderFiltered(FilterInterface $filter, OrderByInterface $orderBy)
    {
        return $orderBy->getQueryBuilder($filter->getQueryBuilder($this->createQueryBuilder('s')));
    }

}