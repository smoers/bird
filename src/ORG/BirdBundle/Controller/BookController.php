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
 * Date: 1/08/2017
 * Time: 12:33
 */

namespace ORG\BirdBundle\Controller;

use ORG\BirdBundle\Entity\Book;
use ORG\BirdBundle\Entity\Cycle;
use ORG\BirdBundle\Entity\ExtendValuesBook;
use ORG\BirdBundle\Entity\ExtendValuesCycle;
use ORG\BirdBundle\Entity\LinkFieldsBook;
use ORG\BirdBundle\Entity\LinkFieldsCycle;
use ORG\BirdBundle\Form\BookType;
use ORG\BirdBundle\Model\ExtendFields\ChoiceTypeExtendField;
use ORG\BirdBundle\Model\Menu\MenuDisabledTwig;
use ORG\BirdBundle\Model\Upload\UploadedImage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller
{
    /**
     * Cette méthode permet d'ajouter un livre qui n'est pas lié à un cycle
     *
     * @param Request $request
     */
    public function addbookAction(Request $request, $idAuthor, $isCycle, $isNew)
    {
        //Converti les string true et false en variable boolean
        $isCycle = filter_var($isCycle, FILTER_VALIDATE_BOOLEAN);
        $isNew = filter_var($isNew, FILTER_VALIDATE_BOOLEAN);
        //Init reporsitory
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
        $author = null;
        $cycle = null;
        if($isCycle && !$isNew) {
            /**
             * Cas où on crée un nouveau livre pour un cycle existant
             */
            $cycle = $em->getRepository('ORGBirdBundle:Cycle')->find($idAuthor);
            if (!$cycle) {
                $request->getSession()->getFlashBag()->add('warning', $idAuthor . ' ' . $trans->trans('cycle.no.found.warning'));
                return $this->redirectToRoute('bird_homepage');
            }
            $cycle->setNbrvolume($cycle->getNbrvolume()+1);
        }
        else{
            /**
             * Cas où l'on crée un nouvea livre pour un nouveau cycle ou sans nouveau cycle
             */
            $author = $em->getRepository('ORGBirdBundle:Author')->find($idAuthor);
            //Test l'existance de l'auteur
            if (!$author) {
                $request->getSession()->getFlashBag()->add('warning', $idAuthor . ' ' . $trans->trans('author.no.found.warning'));
                return $this->redirectToRoute('bird_homepage');
            }
            $extendRepositoryCycle = $em->getRepository('ORGBirdBundle:ExtendFieldsCycle');
            //Nouvel objet Cycle
            $cycle = new Cycle();
            $cycle->setYncycle($isCycle);
            $cycle->setNbrvolume(1);
            //Obtenir les extend fields, créer les Link objet et les Extend value objet
            foreach ($extendRepositoryCycle->findAll() as $extendField){
                $linkField = new LinkFieldsCycle();
                $linkField->setExtendFieldsCycle($extendField);
                $linkField->setExtendValuesCycle(new ExtendValuesCycle());
                $cycle->addLinkfieldscycle($linkField);
            }
            //Ajoute le cycle à l'auteur et l'auteur s'ajoute automatiquement au cycle
            $author->addCycle($cycle);
        }
        /**
         * définition du nouvelle object book
         */
        $book = new Book();
        $extendRepositoryBook = $em->getRepository('ORGBirdBundle:ExtendFieldsBook');
        foreach ($extendRepositoryBook->findAll() as $extendField){
            $linkField = new LinkFieldsBook();
            $linkField->setExtendFieldsBook($extendField);
            $linkField->setExtendValuesBook(new ExtendValuesBook());
            $book->addLinkfieldsbook($linkField);
        }
        //ajoute le livre au cycle et le cycle s'ajoute automatiquement au Book
        $cycle->addBook($book);
        //Objet de chargement des images
        $uploadedImage = new UploadedImage($this->getParameter('images_books_folder'));
        //Objet permettant de chercher la liste des valeurs d'une liste déroulante pour les champs étendu
        $choiceTypeExtendField = new ChoiceTypeExtendField($this->getDoctrine()->getManager(), $this->getParameter('choice_books'));
        $choiceTypeExtendFieldCycle = null;
        //définition de l'objet permettant la contruction des liste déroulantes de champs étendus si il y a un cycle
        if($isCycle){
            $choiceTypeExtendFieldCycle = new ChoiceTypeExtendField($this->getDoctrine()->getManager(), $this->getParameter('choice_cycles'));
        }
        //Creation du formulaire
        $form = $this->get('form.factory')->create(BookType::class,$book, array(
            'uploaded_image' => $uploadedImage,
            'choice_type_extend_field' => $choiceTypeExtendField,
            'choice_type_extend_field_cycle' => $choiceTypeExtendFieldCycle,
            'iscycle' => $isCycle));

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()){
                //$cycle->setTitle($cycle->getBooks()->first()->getTitle());
                //Sauvegarde le cycle et le livre
                $em->persist($cycle);
                $em->flush();
                //Déplace l'image dans le bon repertoire si elle existe
                $uploadedImage->move($book->getId());
                $request->getSession()->getFlashBag()->add('success',$book->getTitle().' '.$trans->trans('book.add.success'));
                return $this->redirectToRoute('bird_homepage');
            }
        }
        //Constitue la liste des auteurs pour le titre
        $comment = null;
        foreach ($cycle->getAuthors() as $key => $item){
            if($key != 0){ $comment .= ', '; }
            $comment .= $item->getLastname().' '.$item->getFirstname();
        }

        return $this->render('ORGBirdBundle:CycleBook:FormBook.html.twig', array(
            'title' => 'book.add',
            'title_comment' => $comment,
            'form' => $form->createView(),
            'imageroot' => $uploadedImage,
            'menudisabled' => $menuDisabledTwig,
            'iscycle' => $isCycle,
        ));

    }


    public function addAction(Request $request)
    {

    }

    public function editbookAction(Request $request, $id){
        //Init
        $em = $this->getDoctrine()->getManager();
        $bookRepository = $em->getRepository('ORGBirdBundle:Book');
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
        //Recherche l'auteur
        $book = $bookRepository->find($id);
        //Test l'existance de l'auteur
        if(!$book){
            $request->getSession()->getFlashBag()->add('warning',$id.' '.$trans->trans('book.no.found.warning'));
            return $this->redirectToRoute('bird_homepage');
        }
        //Détermine si le livre fait partie d'un cycle
        $isCycle = $book->getCycle()->getYncycle();
        //Objet de chargement des images
        $uploadedImage = new UploadedImage($this->getParameter('images_books_folder'));
        $uploadedImage->setImageName($book->getId());
        //Objet permettant de chercher la liste des valeurs d'une liste déroulante pour les champs étendu
        $choiceTypeExtendField = new ChoiceTypeExtendField($this->getDoctrine()->getManager(), $this->getParameter('choice_books'));
        //définition de l'objet permettant la contruction des listes déroulantes de champs étendus si il y a un cycle
        if($isCycle){
            $choiceTypeExtendFieldCycle = new ChoiceTypeExtendField($this->getDoctrine()->getManager(), $this->getParameter('choice_cycles'));
        }
        //Creation du formulaire
        $form = $this->get('form.factory')->create(BookType::class,$book, array(
            'uploaded_image' => $uploadedImage,
            'choice_type_extend_field' => $choiceTypeExtendField,
            'choice_type_extend_field_cycle' => $choiceTypeExtendFieldCycle,
            'iscycle' => $isCycle
        ));
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()){
                //Sauvegarde l'auteur
                $em->persist($book);
                $em->flush();
                //Déplace l'image dans le bon repertoire si elle existe
                $uploadedImage->move($book->getId());
                $request->getSession()->getFlashBag()->add('success',$book->getTitle().' '.$trans->trans('book.edit.success'));
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
        foreach ($book->getCycle()->getAuthors() as $key => $item){
            if($key != 0){ $comment .= ', '; }
            $comment .= $item->getLastname().' '.$item->getFirstname();
        }
        return $this->render('ORGBirdBundle:CycleBook:FormBook.html.twig', array(
            'title' => 'book.edit',
            'title_comment' => $comment,
            'form' => $form->createView(),
            'imageroot' => $uploadedImage,
            'menudisabled' => $menuDisabledTwig,
            'iscycle' => $isCycle,
        ));
    }

}