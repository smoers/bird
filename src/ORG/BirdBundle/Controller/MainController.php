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
* MainController.php
* Sabena Aerospace
* Author : Moers Serge
* Date : 5 Apr 2017
*/

namespace ORG\BirdBundle\Controller;

use ORG\BirdBundle\Model\Filter\Filter;
use ORG\BirdBundle\Model\Filter\FilterInterface;
use ORG\BirdBundle\Model\Menu\MenuDisabledTwig;
use ORG\BirdBundle\Model\OrderBy\OrderBy;
use ORG\BirdBundle\Model\OrderBy\OrderByInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function indexAction(Request $request){

	    $menuDisabledTwig = new MenuDisabledTwig();
		return $this->render('ORGBirdBundle:Main:Main.html.twig',array('title' => 'main.title', 'menudisabled' => $menuDisabledTwig));

	}

    /**
     * @param Request $request
     * @return JsonResponse
     */
	public function gridAuthorsAction(Request $request){

	    //Obtenir l'instance du logger
        $logger = $this->get('monolog.logger.bird');
        if($request->isXmlHttpRequest()) {
            //Tri alphabetique sans demande de tri
            if ($request->get('type') === 'alph'
                && null !== $request->get('letter')
                && null == $request->get('sort')
                && null == $request->get('ordert'))
            {
                $logger->info($request->get('type'), array($request->get('letter')));
                    return new JsonResponse($this->getData($request,true));
            }
            //Nous sommes dans le cas d'une demande de tri des colonnes sans filtre
            elseif (null === $request->get('type')
                    && null === $request->get('letter')
                    && null !== $request->get('sort')
                    && null !== $request->get('order'))
            {
                    return new JsonResponse($this->getData($request,false,true));
            }
            elseif (null !== $request->get('type')
                && null !== $request->get('letter')
                && null !== $request->get('sort')
                && null !== $request->get('order'))
            {
                return new JsonResponse($this->getData($request,true,true));
            }
            else
            {
                return new JsonResponse($this->getData($request, false, false));
            }
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function gridCyclesAction(Request $request)
    {
        //Obtenir l'instance du logger
        $logger = $this->get('monolog.logger.bird');
        $repository = $this->getDoctrine()->getRepository('ORGBirdBundle:Cycle');
        if(null !== $request->get('id_author')){
            //creation d'un objet Filter en mode stricte
            $filter = new Filter();
            $filter->setFields(array('id'));
            $filter->setValue($request->get('id_author'));
            $filter->setAlias(FilterInterface::ALIAS_NO_ROOT);
            $filter->setStrict(true);
            $filter->setComparator(FilterInterface::COMPARATOR_EQ);
            //creation d'un object OrderBy pour le tri
            $order = new OrderBy();
            $order->clear();
            //dans le cas d'une demande de tri
            if(null !== $request->get('sort') && null !== $request->get('order')){
                $order->push($request->get('sort'), $request->get('order'));
            }
            else{
                $order->push('title', 'ASC');
            }
            $order->push('title', 'ASC');
            $order->setAlias(OrderByInterface::ALIAS_ONLY_ROOT);
            $logger->info($repository->getQueryBuilderFiltered($filter, $order)->getQuery()->getSQL());
            //var_dump($repository->getQueryBuilderFiltered($filter, $order)->getQuery()->getArrayResult());exit;
            return new JsonResponse($repository->getQueryBuilderFiltered($filter, $order)->getQuery()->getArrayResult());

        }
        //supprime l'erreur lors du chargement de la page
        //car le controller doit absolument retourner une reponse
        return new JsonResponse(array(false));
    }

    public function gridBooksAction(Request $request)
    {
        //Obtenir l'instance du logger
        $logger = $this->get('monolog.logger.bird');
        if(null !== $request->get('id_cycle')){
            $repository = $this->getDoctrine()->getRepository('ORGBirdBundle:Book');
            //creation d'un objet Filter en mode stricte
            $filter = new Filter();
            $filter->setFields(array('cycle'));
            $filter->setValue($request->get('id_cycle'));
            $filter->setAlias(FilterInterface::ALIAS_ONLY_ROOT);
            $filter->setStrict(true);
            $filter->setComparator(FilterInterface::COMPARATOR_EQ);
            //creation d'un object OrderBy pour le tri
            $order = new OrderBy();
            $order->clear();
            //dans le cas d'une demande de tri
            if(null !== $request->get('sort') && null !== $request->get('order')){
                $order->push($request->get('sort'), $request->get('order'));
            }
            else{
                $order->push('title', 'ASC');
                $order->push('volume', 'ASC');
            }
            $order->setAlias(OrderByInterface::ALIAS_ONLY_ROOT);
            $query = $repository->getQueryBuilderFiltered($filter, $order)->getQuery();
            $logger->info($query->getSQL());
            return new JsonResponse($query->getArrayResult());
        }
        //supprime l'erreur lors du chargement de la page
        //car le controller doit absolument retourner une reponse
        return new JsonResponse(array(false));
    }


    /**
     * Return un tableau de resultat filtrer et trier
     * @param Request $request
     * @param bool $flag_filter
     * @param bool $flag_order
     * @return mixed
     */
    private function getData(Request $request, $flag_filter = false, $flag_order = false){

        //init
        $filter = new Filter();
        $filter->setFields(array('lastname'));
        $orderBy = new OrderBy();
        //Init repository
        $repository = $this->getDoctrine()->getRepository('ORGBirdBundle:Author');
        //Si le flag filter est true, on doit faire un tri alphabetique
        if($flag_filter){
            //Lorsque la lettre est =plus grande que 1 caractere on charge le wildcard % à la place de la lettre
            $filter->setValue(strlen($request->get('letter')) > 1 ? '%' : $request->get('letter'));
            $filter->setType(FilterInterface::START_WITH);
        }
        else{
            $filter->setValue('%');
        }
        //Si le flag order est true cela signifique que l'on a une demande de tri
        if($flag_order){
            //Vide le tableau
            $orderBy->clear();
            //On charge le champ
            $orderBy->push($request->get('sort'), $request->get('order'));
        }
        else{
            $orderBy = new OrderBy();
            $orderBy->push('lastname', 'ASC');
            $orderBy->push('firstname', 'ASC');
        }
        return $repository->getQueryBuilderFiltered($filter,$orderBy)->getQuery()->getResult();

    }

}