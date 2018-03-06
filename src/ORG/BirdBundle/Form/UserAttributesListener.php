<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 27/02/2018
 * Time: 13:15
 */

namespace ORG\BirdBundle\Form;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\PropertyAccess\PropertyPathInterface;

class UserAttributesListener implements EventSubscriberInterface
{
    protected $key;
    protected $attributes;

    /**
     * UserAttributesListener constructor.
     */
    public function __construct(PropertyPathInterface $propertyPath, array $attributes)
    {
        $this->key = $propertyPath->getElement(0);
        $this->attributes = $attributes;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'onPreSetData',
            FormEvents::PRE_SUBMIT => 'onPreSubmit',
        );
    }

    public function onPreSetData(FormEvent $event)
    {
        $attribute = $event->getData();
        $form = $event->getForm();
        $key = $this->key;
        $array = array($key => $attribute);
        $form->add('attribute',ChoiceType::class,array(
            'choices' => $this->attributes[$key],
        ));
    }
}