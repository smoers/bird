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
 * Date: 19/10/2017
 * Time: 12:43
 */

namespace ORG\BirdBundle\Controller;

use ORG\BirdBundle\Model\Filter\Filter;
use ORG\BirdBundle\Model\OrderBy\OrderBy;
use ORG\BirdBundle\Model\TreeGrid\NodeCycleBook;
use ORG\BirdBundle\Model\TreeGrid\NodeCycleBookBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AjaxController extends Controller
{
    public function ajaxAction(Request $request){
        if($request->isXmlHttpRequest() && $request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();
            switch ($request->get('ajaxid')) {
                case 'get_cycle':
                    $authorId = $request->get('authorid');
                    $filterA = new Filter();
                    $filterA->setStrict(true);
                    $filterA->setFields(array('id'));
                    $filterA->setValue($authorId);
                    $filterA->setAlias(Filter::ALIAS_NO_ROOT);
                    $filterA->setComparator(Filter::COMPARATOR_EQ);
                    $filterB = new Filter();
                    $filterB->setStrict(true);
                    $filterB->setFields(array('yncycle'));
                    $filterB->setValue(true);
                    $filterB->setOperator(Filter::OPERATOR_AND);
                    $filterB->setAlias(Filter::ALIAS_ONLY_ROOT);
                    $filterB->setComparator(Filter::COMPARATOR_EQ);
                    $orderBy = new OrderBy();
                    $orderBy->setAlias(OrderBy::ALIAS_ONLY_ROOT);
                    $orderBy->push('title',OrderBy::ORDER_ASC);
                    return new JsonResponse($filterB->getQueryBuilder($em->getRepository('ORGBirdBundle:Cycle')->getQueryBuilderFiltered($filterA, $orderBy))->getQuery()->getArrayResult());
                    break;

                case 'get_layout_cirrus':
                    $authorId = $request->get('authorid');
                    $forJson = array();
                    $filter = new Filter();
                    $filter->setStrict(true);
                    $filter->setFields(array('id'));
                    $filter->setValue($authorId);
                    $filter->setAlias(Filter::ALIAS_NO_ROOT);
                    $filter->setComparator(Filter::COMPARATOR_EQ);
                    $orderBy = new OrderBy();
                    $orderBy->setAlias(OrderBy::ALIAS_ONLY_ROOT);
                    $orderBy->push('title',OrderBy::ORDER_ASC);
                    $result = $em->getRepository('ORGBirdBundle:Cycle')->getQueryBuilderFiltered($filter, $orderBy)->getQuery()->getResult();
                    var_dump(count($result));
                    $nodes = new NodeCycleBookBuilder($result);
                    $nodes->build();
                    return new JsonResponse($nodes->getForJson());

            }
        }

        return new JsonResponse(array());
    }

}