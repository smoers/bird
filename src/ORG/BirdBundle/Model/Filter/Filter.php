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
 * Date: 3/05/2017
 * Time: 13:11
 */

namespace ORG\BirdBundle\Model\Filter;


use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\QueryBuilder;

class Filter implements FilterInterface
{
    private $value;
    private $fields;
    private $wildcard;
    private $type;
    private $operator;
    private $arrayAlias;
    private $alias;
    private $modeStrict;
    private $comparator;

    /**
     * Filter constructor.
     * par defaut:
     *  value = null
     *  type = FilterInterface::CONTAIN
     *  wildcard = '%'
     *  field = array()
     *  arrayAlias = array()
     *  alias = FilterInterface::ALIAS_ALL
     *  modeStrict = false
     *  comparator = 'like'
     */
    public function __construct()
    {
        $this->value = null;
        $this->type = FilterInterface::CONTAIN;
        $this->wildcard = '%';
        $this->fields = array();
        $this->arrayAlias = array();
        $this->alias = FilterInterface::ALIAS_ALL;
        $this->modeStrict = false;
        $this->comparator = 'like';
        $this->operator = null;
    }


    /**
     * Set la valeur à filtrer
     * @param $value
     * @return mixed
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get la valeur à filtrer
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set la liste des champs à utiliser pour effectuer la recherche
     * @param array $fields
     * @return mixed
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    /**
     * Get la liste des champs à utiliser pour effectuer la recherche
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set le caractere wildcard
     * @param $wildcardCharacter
     * @return mixed
     */
    public function setWildcardCharacter($wildcardCharacter)
    {
        $this->wildcard = $wildcardCharacter;
    }

    /**
     * Get le caractere wildcard
     * @return string
     */
    public function getWildcardCharacter()
    {
        return $this->wildcard;
    }

    /**
     * Retourne la chaine de recherche composé de la valeur et du caractere wildcard
     * @return string
     */
    public function getFilterValueWildcardCharacter()
    {
        $value = $this->value;

        switch ($this->type){
            case FilterInterface::START_WITH :
                $value .= $this->getWildcardCharacter();
                break;
            case FilterInterface::END_WITH :
                $value = $this->getWildcardCharacter().$value;
                break;
            case FilterInterface::CONTAIN :
                $value = $this->getWildcardCharacter().$value.$this->getWildcardCharacter();
                break;
        }
        return $value;
    }

    /**
     * Set le type de chaine Value / Wildcard à construire
     * Définir le type à l'aide des constantes de la classe FilterInterface::class
     * START_WITH ex: wildcard+value
     * END_WITH ex: value+wildcard
     * CONTAIN ex: wildcard+value+wildcard
     * @param $type
     * @return mixed
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Retourne la constante type
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Défini l'opérateur utilisé par le filtre
     * Définir le type à l'aide des constantes de la classe FilterInterface::class
     * AND_OPERATOR
     * OR_OPERATOR
     * @param $operator
     * @return mixed
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * Retourne la constante opérateur
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * permet d'obtenir un object QueryBuilder complétement défini
     * @param QueryBuilder $queryBuilder
     * @return mixed
     */
    public function getQueryBuilder(QueryBuilder $queryBuilder)
    {
        //Cette index est utilisé pour rendre unique le nom du parametre
        $randomIndex = rand(1,1000);
        //Va contenir les alias à utiliser dans la creation de la condition
        $listAlias = array();
        //détermine les alias à utiliser
        switch ($this->alias){
            case FilterInterface::ALIAS_ALL:
                $listAlias = $queryBuilder->getAllAliases();
                break;
            case FilterInterface::ALIAS_ONLY_ROOT:
                $listAlias = $queryBuilder->getRootAliases();
                break;
            case FilterInterface::ALIAS_NO_ROOT:
                $listAlias = $queryBuilder->getAllAliases();
                $listAlias = array_diff($listAlias, $queryBuilder->getRootAliases());
                break;
            case FilterInterface::ALIAS_DEFINED:
                $listAlias = $this->arrayAlias;
                break;

        }

        foreach ($listAlias as $alias){
            //pour chaque champ on cree la clause where
            //sur base de l'operateur
            foreach ($this->getFields() as $field) {
                switch ($this->getOperator()) {
                    case FilterInterface::OPERATOR_AND:
                        $queryBuilder->andWhere($alias.'.' . $field . ' '.$this->comparator.' :value_'.$randomIndex);
                        break;
                    case FilterInterface::OPERATOR_OR:
                        $queryBuilder->orWhere($alias.'.' . $field . ' '.$this->comparator.' :value_'.$randomIndex);
                        break;
                    case null:
                        $queryBuilder->where($alias.'.'.$field.' '.$this->comparator.' :value_'.$randomIndex);
                }
            }
        }

        //La valeur est chargée avec le wildcard ou sans suivant le mode stricte
        if($this->modeStrict){
            $queryBuilder->setParameter('value_'.$randomIndex,$this->getValue());
        }
        else{
            $queryBuilder->setParameter('value_'.$randomIndex, $this->getFilterValueWildcardCharacter());
        }
        return $queryBuilder;
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
            $this->alias = FilterInterface::ALIAS_DEFINED;
        }
        else{
            $this->alias = $alias;
        }
    }

    /**
     * Determine s'il faut utiliser le wildcard
     * dans le cas de comparaison sans Like ni wildcard caractere
     * @param $strict boolean
     * @return mixed
     */
    public function setStrict($strict)
    {
        $this->modeStrict = $strict;
    }

    /**
     * Retourne true si le filtre est en mode stricte
     * @return boolean
     */
    public function getStrict()
    {
        return $this->modeStrict;
    }

    /**
     * défini le comparateur à utiliser lorsque le filtre est en mode stricte
     * @param $comparator string
     * @return mixed
     */
    public function setComparator($comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * retourne le comparateur utilisé quand le filtre est en mode stricte
     * @return string
     */
    public function getComparator()
    {
        return $this->comparator;
    }
}