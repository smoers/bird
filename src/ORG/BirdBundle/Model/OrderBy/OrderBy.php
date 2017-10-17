<?php
/**
 * Copyright (c) 2017.  Bird Web
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

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