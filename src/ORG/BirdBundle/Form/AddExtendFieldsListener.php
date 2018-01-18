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
 * Date: 13/06/2017
 * Time: 12:31
 */

namespace ORG\BirdBundle\Form;

use ORG\BirdBundle\Model\ExtendFields\ChoiceTypeExtendField;
use ORG\BirdBundle\Model\ExtendFields\ExtendField;
use Doctrine\DBAL\Types\DecimalType;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

/**
 * Se charge de la construction et de la récupération des données
 * des champs étendus dans un formulaire.
 * Class AddExtendFieldsListener
 * @package ORG\BirdBundle\Form
 */
class AddExtendFieldsListener implements EventSubscriberInterface
{

    private $choiceTypeExtendField;

    /**
     * AddExtendFieldsListener constructor.
     * @param ChoiceTypeExtendField $choiceTypeExtendField
     */
    public function __construct(ChoiceTypeExtendField $choiceTypeExtendField)
    {
        $this->choiceTypeExtendField = $choiceTypeExtendField;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'onPreSetData',
            FormEvents::PRE_SUBMIT => 'onPreSubmit',
        );
    }

    /**
     * Va charger les données dans les bons objets
     * @param FormEvent $event
     */
    public function onPreSubmit(FormEvent $event){

        $extendField = new ExtendField($event->getForm()->getData());
        if (array_key_exists('field',$event->getData()) && $event->getData()['field'] === ''){
            $extendField->setValue(null);
        }
        else {
            switch ($extendField->getType()) {
                case 'string':
                    $extendField->setValue($event->getData()['field']);
                    break;
                case 'number':
                    $extendField->setValue(intval($event->getData()['field']));
                    break;
                case 'decimal':
                    $extendField->setValue(floatval($event->getData()['field']));
                    break;
                case 'date':
                    $extendField->setValue(\DateTime::createFromFormat('d/m/Y', $event->getData()['field']));
                    break;
                case 'boolean':
                    if (array_key_exists('field', $event->getData())){
                        $extendField->setValue(true);
                    }
                    else {
                        $extendField->setValue(false);
                    }
                    break;
                default:
                    $extendField->setValue($event->getData()['field']);
                    break;
            }
        }
    }

    /**
     * Va construire le formulaire avec les bons type de champs
     * @param FormEvent $event
     */
    public function onPreSetData(FormEvent $event)
    {
        $linkField = $event->getData();
        $extendField = new ExtendField($linkField);
        $form = $event->getForm();
        $attributes = array(
            'required' => false,
            'mapped' => false,
            'data' => $extendField->getValue(),
            'label' => $extendField->getName().' :',
            'error_bubbling' => true,
        );

        switch ($extendField->getType()){
            case 'string':
                $type = TextType::class;
                break;
            case 'number':
                $type = NumberType::class;
                $attributes = array_merge($attributes, array(
                    'empty_data' => '',
                    'scale' => 0,
                ));
                break;
            case 'decimal':
                $type = DecimalType::class;
                break;
            case 'longtext':
                $type = TextareaType::class;
                break;
            case 'date':
                $type = DateType::class;
                $attributes = array_merge($attributes, array(
                    'html5' => false,
                    'format' => 'dd/MM/yyyy',
                    'widget' => 'single_text',
                    'empty_data' => '',
                ));
                break;
            case 'boolean':
                $type = CheckboxType::class;
                $attributes = array_merge($attributes, array(
                    'empty_data' => '0',
                ));
                break;
            case 'email':
                $type = EmailType::class;
                break;
            case 'url':
                $type = UrlType::class;
                break;
            case 'choice':
                $type = ChoiceType::class;
                $attributes = array_merge($attributes, array(
                    'choices' => $this->choiceTypeExtendField->getChoices($extendField->getValue()),
                ));
                break;
        }
        $form->add(
            'field',
            $type,
            $attributes
         )
        ->add(
            'type',
            HiddenType::class,
            array(
                'data' => $extendField->getType(),
                'mapped' => false
            )
        );
    }
}