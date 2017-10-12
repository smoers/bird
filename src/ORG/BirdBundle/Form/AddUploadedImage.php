<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 20/06/2017
 * Time: 12:35
 */

namespace ORG\BirdBundle\Form;
use ORG\BirdBundle\Model\Upload\UploadedImage;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

/**
 * Permet la gestion du fichier image dans un formulaire
 * Class AddUploadedImage
 * @package ORG\BirdBundle\Form
 */
class AddUploadedImage implements EventSubscriberInterface
{

    private $uploadedImage;

    public function __construct(UploadedImage $uploadedImage)
    {
        $this->uploadedImage = $uploadedImage;
    }

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'onPreSetData',
            FormEvents::PRE_SUBMIT => 'onPreSubmit',
        );
    }

    /**
     * @param FormEvent $event
     */
    public function onPreSetData(FormEvent $event)
    {
        $form = $event->getForm();
        $form->add(
            'image',
            FileType::class,
            array(
                'required' => false,
                'mapped' => false,
                'label' => false,
            )
        );
    }

    /**
     * @param FormEvent $event
     */
    public function onPreSubmit(FormEvent $event)
    {
        if (null !== $event->getData()['image']){
            $this->uploadedImage->setUploadedFile($event->getData()['image']);
            $event->getForm()->getData()->setImage(true);
        }
    }
}