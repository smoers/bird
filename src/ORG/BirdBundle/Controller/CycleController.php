<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 26/01/2018
 * Time: 13:08
 */

namespace ORG\BirdBundle\Controller;


use ORG\BirdBundle\Form\CycleType;
use ORG\BirdBundle\Model\ExtendFields\ChoiceTypeExtendField;
use ORG\BirdBundle\Model\Menu\MenuDisabledTwig;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class CycleController extends Controller
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
    }

    public function editAction(Request $request, $id){

        //init
        $em = $this->getDoctrine()->getManager();
        $cycle = $em->getRepository('ORGBirdBundle:Cycle')->find($id);
        $trans = $this->get('translator');
        //Test l'existance du cycle
        if(!$cycle){
            $request->getSession()->getFlashBag()->add('warning',$id.' '.$trans->trans('cycle.no.found.warning'));
            return $this->redirectToRoute('bird_homepage');
        }
        //gestion des accès au menu
        $menuDisabledTwig = new MenuDisabledTwig();
        $menuDisabledTwig->setDisabled(array(
            'menu_author_add',
            'menu_author_edit',
            'menu_author_delete',
            'menu_cycle_add',
            'menu_cycle_edit',
            'menu_cycle_delete',
            'menu_book_add',
            'menu_book_edit',
            'menu_book_delete'
        ));
        //définition de l'objet permettant la contruction des listes déroulantes de champs étendus d'un cycle
        $choiceTypeExtendFieldCycle = new ChoiceTypeExtendField($this->getDoctrine()->getManager(), $this->getParameter('choice_cycles'));

        //Creation du formulaire
        $form = $this->get('form.factory')->create(CycleType::class,$cycle, array(
            'choice_type_extend_field' => $choiceTypeExtendFieldCycle,
            'iscycle' => true,
            'isedit' => true));

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()){
                //Sauvegarde le cycle
                $em->persist($cycle);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',$cycle->getTitle().' '.$trans->trans('cycle.edit.success'));
                //active le filtre utilisé lors de l'affichage de la home page
                if($request->getSession()->has('author_criteria_filter')){
                    $filter = $request->getSession()->get('author_criteria_filter');
                    $filter['enabled'] = true;
                    $request->getSession()->set('author_criteria_filter',$filter);

                }
                return $this->redirectToRoute('bird_homepage');
            }
        }
        //Constitue la liste des auteurs pour le titre
        $comment = null;
        foreach ($cycle->getAuthors() as $key => $item){
            if($key != 0){ $comment .= ', '; }
            $comment .= $item->getLastname().' '.$item->getFirstname();
        }
        return $this->render('ORGBirdBundle:CycleBook:FormCycle.html.twig', array(
            'title' => 'cycle.edit',
            'title_comment' => $comment,
            'form' => $form->createView(),
            'menudisabled' => $menuDisabledTwig,
            'loginas' => $this->login['loginAs'],
        ));

    }

}