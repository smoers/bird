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
 * Date: 13/07/2017
 * Time: 12:52
 */

namespace ORG\BirdBundle\Model\ExtendFields;


use ORG\BirdBundle\Model\Filter\Filter;
use Doctrine\ORM\EntityManager;

class ChoiceTypeExtendField
{
    private $em;
    private $ownerPrefix;

    public function __construct(EntityManager $manager, $ownerPrefix)
    {
        $this->em = $manager;
        $this->ownerPrefix = $ownerPrefix;

    }

    public function getChoices($id)
    {
        $repository = $this->em->getRepository('ORGBirdBundle:System');
        //Filtre sur le Owner Prefix avec un Like
        $filterOwner = new Filter();
        $filterOwner->setFields(array('filter'));
        $filterOwner->setValue($this->ownerPrefix);
        //AND uniquement les records enabled
        $filterEnabled = new Filter();
        $filterEnabled->setStrict(true);
        $filterEnabled->setOperator(Filter::OPERATOR_AND);
        $filterEnabled->setComparator(Filter::COMPARATOR_EQ);
        $filterEnabled->setFields(array('enabled'));
        $filterEnabled->setValue(true);
        //OR si l'id est égale à la valeur passée
        $filterId = new Filter();
        $filterId->setStrict(true);
        $filterId->setOperator(Filter::OPERATOR_OR);
        $filterId->setComparator(Filter::COMPARATOR_EQ);
        $filterId->setFields(array('id'));
        $filterId->setValue($id);
        $queryBuilder = $filterId->getQueryBuilder($filterEnabled->getQueryBuilder($filterOwner->getQueryBuilder($repository->createQueryBuilder('s'))));

        return $this->getFormattedArray($queryBuilder->getQuery()->getArrayResult());

    }

    private function getFormattedArray(array $array)
    {
        $return = array();
        foreach ($array as $item){
            $return[$item['value']] = $item['id'];
        }
        return $return;
    }

}