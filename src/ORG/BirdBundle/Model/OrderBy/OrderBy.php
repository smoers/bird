<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 5/05/2017
 * Time: 12:23
 */

namespace ORG\BirdBundle\Model\OrderBy;

use Doctrine\ORM\QueryBuilder;

class OrderBy implements OrderByInterface
{

    private $array;
    private $arrayAlias;
    private $alias;

    public function __construct()
    {
        $this->array = array();
        $this->arrayAlias = array();
        $this->alias = OrderByInterface::ALIAS_ALL;
    }
    /**
     * Create array
     * @param $field
     * @param $order
     * @return mixed
     */
    public function push($field, $order)
    {
        $this->array[$field] = $order;
    }

    /**
     * Get Array
     * @return mixed
     */
    public function getArray()
    {
        return $this->array;
    }

    /**
     * Create QueryBuilder with OrderBy
     * @param QueryBuilder $queryBuilder
     * @return mixed
     */
    public function getQueryBuilder(QueryBuilder $queryBuilder)
    {
        //Va contenir les alias à utiliser dans la creation de la condition
        $listAlias = array();
        //détermine les alias à utiliser
        switch ($this->alias){
            case OrderByInterface::ALIAS_ALL:
                $listAlias = $queryBuilder->getAllAliases();
                break;
            case OrderByInterface::ALIAS_ONLY_ROOT:
                $listAlias = $queryBuilder->getRootAliases();
                break;
            case OrderByInterface::ALIAS_NO_ROOT:
                $listAlias = $queryBuilder->getAllAliases();
                $listAlias = array_diff($listAlias, $queryBuilder->getRootAliases());
                break;
            case OrderByInterface::ALIAS_DEFINED:
                $listAlias = $this->arrayAlias;
                break;

        }

        foreach ($listAlias as $alias){
            foreach ($this->array as $key => $value){
                $queryBuilder->addOrderBy($alias.'.'.$key, $value);
            }
        }
        return $queryBuilder;
    }

    /**
     * Unset Array
     * @return mixed
     */
    public function clear()
    {
        unset($this->array);
        $this->array = array();
    }

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
    public function setAlias($alias)
    {
        if(is_array($alias)){
            $this->arrayAlias = $alias;
            $this->alias = OrderByInterface::ALIAS_DEFINED;
        }
        else{
            $this->alias = $alias;
        }    }
}