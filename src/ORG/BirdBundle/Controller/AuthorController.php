<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 6/06/2017
 * Time: 13:10
 */

namespace ORG\BirdBundle\Controller;


use ORG\BirdBundle\Entity\Author;
use ORG\BirdBundle\Entity\ExtendValuesAuthor;
use ORG\BirdBundle\Entity\LinkFieldsAuthor;
use ORG\BirdBundle\Form\AuthorType;
use ORG\BirdBundle\Model\ExtendFields\ChoiceTypeExtendField;
use ORG\BirdBundle\Model\Filter\Filter;
use ORG\BirdBundle\Model\Menu\MenuDisabledTwig;
use ORG\BirdBundle\Model\Upload\UploadedImage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AuthorController
 * @package ORG\BirdBundle\Controller
 */
class AuthorController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request){

        //Init Reposiroty
        $em = $this->getDoctrine()->getManager();
        $trans = $this->get('translator');
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
        $extendRepository = $em->getRepository('ORGBirdBundle:ExtendFieldsAuthor');
        //Nouvel objet Author
        $author = new Author();
        //Obtenir les extend fields, créer les Link objet et les Extend value objet
        foreach ($extendRepository->findAll() as $extendField){
            $linkField = new LinkFieldsAuthor();
            $linkField->setExtendFieldsAuthor($extendField);
            $linkField->setExtendValuesAuthor(new ExtendValuesAuthor());
            $author->addLinkfieldsauthor($linkField);
        }
        //Objet de chargement des images
        $uploadedImage = new UploadedImage($this->getParameter('images_authors_folder'));
        //Objet permettant de chercher la liste des valeurs d'une liste déroulante pour les champs étendu
        $choiceTypeExtendField = new ChoiceTypeExtendField($this->getDoctrine()->getManager(), $this->getParameter('choice_authors'));
        //Creation du formulaire
        $form = $this->get('form.factory')->create(AuthorType::class,$author, array('uploaded_image' => $uploadedImage, 'choice_type_extend_field' => $choiceTypeExtendField));
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()){
                //Sauvegarde l'auteur
                $em->persist($author);
                $em->flush();
                //Déplace l'image dans le bon repertoire si elle existe
                $uploadedImage->move($author->getId());
                $request->getSession()->getFlashBag()->add('success',$author->getFirstname().' '.$author->getLastname().' '.$trans->trans('author.add.success'));
                return $this->redirectToRoute('bird_homepage');
            }
        }

        return $this->render('ORGBirdBundle:Author:FormAuthor.html.twig', array(
            'title' => 'author.add',
            'form' => $form->createView(),
            'imageroot' => $uploadedImage,
            'menudisabled' => $menuDisabledTwig
        ));

    }

    /**
     * Permet la modification d'un auteur
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, $id)
    {
        //Init
        $em = $this->getDoctrine()->getManager();
        $authorRepository = $em->getRepository('ORGBirdBundle:Author');
        $trans = $this->get('translator');
        //gestion des accès au menu
        $menuDisabledTwig = new MenuDisabledTwig();
        $menuDisabledTwig->setDisabled(array(
            'menu_author_add',
            'menu_author_edit',
            'menu_author_delete',
            'menu_cycle_edit',
            'menu_cycle_delete',
            'menu_book_edit',
            'menu_book_delete'
        ));
        //Recherche l'auteur
        $author = $authorRepository->find($id);
        //Test l'existance de l'auteur
        if(!$author){
            $request->getSession()->getFlashBag()->add('warning',$id.' '.$trans->trans('author.no.found.warning'));
            return $this->redirectToRoute('bird_homepage');
        }
        //Objet de chargement des images
        $uploadedImage = new UploadedImage($this->getParameter('images_authors_folder'));
        $uploadedImage->setImageName($author->getId());
        //Objet permettant de chercher la liste des valeurs d'une liste déroulante pour les champs étendu
        $choiceTypeExtendField = new ChoiceTypeExtendField($this->getDoctrine()->getManager(), $this->getParameter('choice_authors'));
        //Creation du formulaire
        $form = $this->get('form.factory')->create(AuthorType::class,$author, array('uploaded_image' => $uploadedImage, 'choice_type_extend_field' => $choiceTypeExtendField));
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()){
                //Sauvegarde l'auteur
                $em->persist($author);
                $em->flush();
                //Déplace l'image dans le bon repertoire si elle existe
                $uploadedImage->move($author->getId());
                $request->getSession()->getFlashBag()->add('success',$author->getFirstname().' '.$author->getLastname().' '.$trans->trans('author.edit.success'));
                return $this->redirectToRoute('bird_homepage');
            }
        }

        return $this->render('ORGBirdBundle:Author:FormAuthor.html.twig', array(
            'title' => 'author.add',
            'form' => $form->createView(),
            'imageroot' => $uploadedImage,
            'menudisabled' => $menuDisabledTwig
        ));


    }

    /**
     * Permet les requêtes Ajax, unique de type POST
     * @param Request $request
     */
    public function ajaxAction(Request $request)
    {
        if($request->isXmlHttpRequest() && $request->isMethod('POST')){
            //Init
            $em = $this->getDoctrine()->getManager();
            $trans = $this->get('translator');
            switch ($request->get('ajaxid')){
                //recherche si un auteur existe déjà avec le même nom et prénom
                case 'exist_author':
                    $firstName = $request->get('firstname');
                    $lastName = $request->get('lastname');
                    $isExist = false;
                    $message = $trans->trans('author.ajax.exist');
                    $title = $trans->trans('author.ajax.warning');
                    //filter pour le prénom
                    $filterFirst = new Filter();
                    $filterFirst->setFields(array('firstname'));
                    $filterFirst->setStrict(true);
                    $filterFirst->setValue($firstName);
                    $filterFirst->setComparator(Filter::COMPARATOR_EQ);
                    //filter pour le nom
                    $filterLast = new Filter();
                    $filterLast->setFields(array('lastname'));
                    $filterLast->setStrict(true);
                    $filterLast->setValue($lastName);
                    $filterLast->setComparator(Filter::COMPARATOR_EQ);
                    $filterLast->setOperator(Filter::OPERATOR_AND);
                    //obtenir le querybuilder
                    $queryBuilder = $em->getRepository('ORGBirdBundle:Author')->getQueryBuilderFilteredArray(array($filterFirst, $filterLast));
                    //config result
                    if(count($queryBuilder->getQuery()->getResult()) !== 0){
                        $isExist = true;
                    }
                    return new JsonResponse(array('isExist' => $isExist, 'title' => $title, 'message' => $message));
                    break;
            }
        }
    }

}