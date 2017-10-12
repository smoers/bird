<?php
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
    public function addbookAction(Request $request, $idAuthor)
    {
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
        $author = $em->getRepository('ORGBirdBundle:Author')->find($idAuthor);
        //Test l'existance de l'auteur
        if(!$author){
            $request->getSession()->getFlashBag()->add('warning',$idAuthor.' '.$trans->trans('author.no.found.warning'));
            return $this->redirectToRoute('bird_homepage');
        }
        $extendRepositoryCycle = $em->getRepository('ORGBirdBundle:ExtendFieldsCycle');
        $extendRepositoryBook = $em->getRepository('ORGBirdBundle:ExtendFieldsBook');
        //Nouvel objet Cycle
        $cycle = new Cycle();
        $cycle->setYncycle(false);
        $cycle->setNbrvolume(1);
        //Nouvel objet Book
        $book = new Book();
        //Obtenir les extend fields, créer les Link objet et les Extend value objet
        foreach ($extendRepositoryCycle->findAll() as $extendField){
            $linkField = new LinkFieldsCycle();
            $linkField->setExtendFieldsCycle($extendField);
            $linkField->setExtendValuesCycle(new ExtendValuesCycle());
            $cycle->addLinkfieldscycle($linkField);
        }
        foreach ($extendRepositoryBook->findAll() as $extendField){
            $linkField = new LinkFieldsBook();
            $linkField->setExtendFieldsBook($extendField);
            $linkField->setExtendValuesBook(new ExtendValuesBook());
            $book->addLinkfieldsbook($linkField);
        }

        //Ajoute le cycle à l'auteur et l'auteur s'ajoute automatiquement au cycle
        $author->addCycle($cycle);
        //ajoute le livre au cycle et le cycle s'ajoute automatiquement au Book
        $cycle->addBook($book);
        //Objet de chargement des images
        $uploadedImage = new UploadedImage($this->getParameter('images_books_folder'));
        //Objet permettant de chercher la liste des valeurs d'une liste déroulante pour les champs étendu
        $choiceTypeExtendField = new ChoiceTypeExtendField($this->getDoctrine()->getManager(), $this->getParameter('choice_books'));
        //Creation du formulaire
        $form = $this->get('form.factory')->create(BookType::class,$book, array('uploaded_image' => $uploadedImage, 'choice_type_extend_field' => $choiceTypeExtendField));

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()){
                var_dump($cycle->getBooks()->first()->getTitle());exit;
                //Sauvegarde le cycle et le livre
                $em->persist($cycle);
                $em->flush();
                //Déplace l'image dans le bon repertoire si elle existe
                $uploadedImage->move($book->getId());
                $request->getSession()->getFlashBag()->add('success',$book->getTitle().' '.$trans->trans('book.add.success'));
                return $this->redirectToRoute('bird_homepage');
            }
        }

        return $this->render('ORGBirdBundle:CycleBook:FormBook.html.twig', array(
            'title' => 'book.add',
            'title_comment' => $author->getLastname().' '.$author->getFirstname(),
            'form' => $form->createView(),
            'imageroot' => $uploadedImage,
            'menudisabled' => $menuDisabledTwig
        ));


    }


    public function addAction(Request $request)
    {

    }

}