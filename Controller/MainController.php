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
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{

    protected $login;

    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
        $user = $this->getUser();
        $this->login = array(
            'loginAs' => $user->getLastname().", ".$user->getFirstname(),
            'attributes' => $user->getAttributes(),
        );

        //$this->get('session')->set('_locale', $this->login['attributes']['language']);

    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function indexAction(Request $request){

	    $menuDisabledTwig = new MenuDisabledTwig();

		return $this->render('ORGBirdBundle:Main:Main.html.twig',array(
		    'title' => 'main.title',
            'menudisabled' => $menuDisabledTwig,
            'loginas' => $this->login['loginAs'],
            'layout' => $this->login['attributes']['layout'],
        ));

	}

    /**
     * @param Request $request
     * @return JsonResponse
     */
	public function gridAuthorsAction(Request $request){

	    //Obtenir l'instance du logger
        $logger = $this->get('monolog.logger.bird');
        if($request->isXmlHttpRequest()) {
            $authorCriteriaFilter = array();
            //Si des critères ont été sauvés dans la session, ils sont chargés et seront utilisés.
            if($request->getSession()->has('author_criteria_filter') && $request->getSession()->get('author_criteria_filter')['enabled']){
                $authorCriteriaFilter = $request->getSession()->get('author_criteria_filter');
                $authorCriteriaFilter['enabled'] = false;
                //var_dump($authorCriteriaFilter);exit;
            }
            else{
                $authorCriteriaFilter['type'] = $request->get('type');
                $authorCriteriaFilter['letter'] = $request->get('letter');
                $authorCriteriaFilter['sort'] = $request->get('sort');
                $authorCriteriaFilter['order'] = $request->get('order');
                $authorCriteriaFilter['enabled'] = false;
            }
            //Sauvegarde les parametres de session
            $request->getSession()->set('author_criteria_filter',$authorCriteriaFilter);
            //Tri alphabetique sans demande de tri
            if ($authorCriteriaFilter['type'] === 'alph'
                && null !== $authorCriteriaFilter['letter']
                && null == $authorCriteriaFilter['sort']
                && null == $authorCriteriaFilter['order'])
            {
                $logger->info($authorCriteriaFilter['type'], array($authorCriteriaFilter['letter']));
                    return new JsonResponse($this->getData($authorCriteriaFilter,true));
            }
            //Nous sommes dans le cas d'une demande de tri des colonnes sans filtre
            elseif (null === $authorCriteriaFilter['type']
                    && null === $authorCriteriaFilter['letter']
                    && null !== $authorCriteriaFilter['sort']
                    && null !== $authorCriteriaFilter['order'])
            {
                    return new JsonResponse($this->getData($authorCriteriaFilter,false,true));
            }
            elseif (null !== $authorCriteriaFilter['type']
                && null !== $authorCriteriaFilter['letter']
                && null !== $authorCriteriaFilter['sort']
                && null !== $authorCriteriaFilter['order'])
            {
                return new JsonResponse($this->getData($authorCriteriaFilter,true,true));
            }
            else
            {
                return new JsonResponse($this->getData($authorCriteriaFilter, false, false));
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
    private function getData(array $authorCriteriaFilter, $flag_filter = false, $flag_order = false){

        //init
        $filter = new Filter();
        $filter->setFields(array('lastname'));
        $orderBy = new OrderBy();
        //Init repository
        $repository = $this->getDoctrine()->getRepository('ORGBirdBundle:Author');
        //Si le flag filter est true, on doit faire un tri alphabetique
        if($flag_filter){
            //Lorsque la lettre est =plus grande que 1 caractere on charge le wildcard % à la place de la lettre
            $filter->setValue(strlen($authorCriteriaFilter['letter']) > 1 ? '%' : $authorCriteriaFilter['letter']);
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
            $orderBy->push($authorCriteriaFilter['sort'], $authorCriteriaFilter['order']);
        }
        else{
            $orderBy = new OrderBy();
            $orderBy->push('lastname', 'ASC');
            $orderBy->push('firstname', 'ASC');
        }
        return $repository->getQueryBuilderFiltered($filter,$orderBy)->getQuery()->getResult();

    }

}