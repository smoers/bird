<?php

namespace ORG\BirdBundle\Model\Filter;

/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 3/05/2017
 * Time: 12:48
 */
use Doctrine\ORM\QueryBuilder;

/**
 * Interface FilterInterface
 * @package ORG\BirdBundle\Model\Filter
 */
interface FilterInterface
{
    const START_WITH = 0;
    const END_WITH = 1;
    const CONTAIN = 3;

    const OPERATOR_AND = 'and';
    const OPERATOR_OR = 'or';

    const ALIAS_ALL = 0;
    const ALIAS_ONLY_ROOT = 1;
    const ALIAS_NO_ROOT = 2;
    const ALIAS_DEFINED = 3;

    const COMPARATOR_EQ = '=';
    const COMPARATOR_LT = '<';
    const COMPARATOR_GT = '>';
    const COMPARATOR_LE = '<=';
    const COMPARATOR_GE = '>=';
    const COMPARATOR_NE = '<>';

    /**
     * Set la valeur à filtrer
     * @param $value
     * @return mixed
     */
    public function setValue($value);

    /**
     * Get la valeur à filtrer
     * @return string
     */
    public function getValue();

    /**
     * Set la liste des champs à utiliser pour effectuer la recherche
     * @param array $fields
     * @return mixed
     */
    public function setFields(array $fields);

    /**
     * Get la liste des champs à utiliser pour effectuer la recherche
     * @return array
     */
    public function getFields();

    /**
     * Set le caractere wildcard
     * @param $wildcardCharacter
     * @return mixed
     */
    public function setWildcardCharacter($wildcardCharacter);

    /**
     * Get le caractere wildcard
     * @return string
     */
    public function getWildcardCharacter();

    /**
     * Retourne la chaine de recherche composé de la valeur et du caractere wildcard
     * @return string
     */
    public function getFilterValueWildcardCharacter();

    /**
     * Set le type de chaine Value / Wildcard à construire
     * Définir le type à l'aide des constantes de la classe FilterInterface::class
     * START_WITH ex: wilcard+value
     * END_WITH ex: value+wilcard
     * CONTAIN ex: wilcard+value+wildcard
     * @param $type
     * @return mixed
     */
    public function setType($type);

    /**
     * Retourne la constante type
     * @return mixed
     */
    public function getType();

    /**
     * Défini l'opérateur utilisé par le filtre
     * Définir le type à l'aide des constantes de la classe FilterInterface::class
     * AND_OPERATOR
     * OR_OPERATOR
     * @param $operator
     * @return mixed
     */
    public function setOperator($operator);

    /**
     * Retourne la constante opérateur
     * @return mixed
     */
    public function getOperator();

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

    /**
     * permet d'obtenir un object QueryBuilder complétement défini
     * @param QueryBuilder $queryBuilder
     * @return mixed
     */
    public function getQueryBuilder(QueryBuilder $queryBuilder);

    /**
     * Determine s'il faut utiliser le wildcard
     * dans le cas de comparaison sans Like ni wildcard caractere
     * @param $strict boolean
     * @return mixed
     */
    public function setStrict($strict);

    /**
     * Retourne true si le filtre est en mode stricte
     * @return boolean
     */
    public function getStrict();

    /**
     * défini le comparateur à utiliser lorsque le filtre est en mode stricte
     * @param $comparator string
     * @return mixed
     */
    public function setComparator($comparator);

    /**
     * retourne le comparateur utilisé quand le filtre est en mode stricte
     * @return string
     */
    public function getComparator();

}