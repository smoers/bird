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