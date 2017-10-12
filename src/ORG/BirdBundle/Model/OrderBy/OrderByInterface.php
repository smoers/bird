<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 5/05/2017
 * Time: 12:12
 */

namespace ORG\BirdBundle\Model\OrderBy;

use Doctrine\ORM\QueryBuilder;

interface OrderByInterface
{

    const ALIAS_ALL = 0;
    const ALIAS_ONLY_ROOT = 1;
    const ALIAS_NO_ROOT = 2;
    const ALIAS_DEFINED = 3;

    const ORDER_ASC = 'ASC';
    const ORDER_DESC = 'DESC';

    /**
     * Create array
     * @param $field
     * @param $order
     * @return mixed
     */
    public function push($field, $order);

    /**
     * Get Array
     * @return mixed
     */
    public function getArray();

    /**
     * Create QueryBuilder with OrderBy
     * @param QueryBuilder $queryBuilder
     * @return mixed
     */
    public function getQueryBuilder(QueryBuilder $queryBuilder);

    /**
     * Unset Array
     * @return mixed
     */
    public function clear();

    /**
     * Défini quelle sont les alias a utiliser dans la construction de la condition
     * Soit on utilise les constanstes ci-dessous, soit on passe un tableau en parametre
     * avec la liste des alias.
     * ALIAS_ALL
     * ALIAS_ONLY_ROOT
     * ALIAS_NO_ROOT
     * ALIAS_DEFINED
     * @param $alias
     * @return mixed
     */
    public function setAlias($alias);

}