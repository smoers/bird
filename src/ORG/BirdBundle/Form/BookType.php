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
 * Date: 8/08/2017
 * Time: 12:52
 */

namespace ORG\BirdBundle\Form;


use ORG\BirdBundle\Model\Filter\Filter;
use ORG\BirdBundle\Model\OrderBy\OrderBy;
use ORG\BirdBundle\Repository\SystemRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $disabled = $options['disabled'];
        $isCycle = $options['iscycle'];

        $builder->add('title',TextType::class,array(
            'disabled' => $disabled,
            'required' => true,
            'label' => 'form.cyclebook.title.volume',
            'translation_domain' => 'ORGBirdBundleCycleBook',
            'error_bubbling' => true,
            ))
            ->add('collection',TextType::class,array(
                'disabled' => $disabled,
                'required' => false,
                'label' => 'form.cyclebook.collection',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ))
            ->add('editor',TextType::class,array(
                'disabled' => $disabled,
                'required' => false,
                'label' => 'form.cyclebook.editor',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ))
            ->add('isbn',TextType::class,array(
                'disabled' => $disabled,
                'required' => false,
                'label' => 'form.cyclebook.isbn',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ))
            ->add('presentation', TextareaType::class,array(
                'disabled' => $disabled,
                'required' => false,
                'label' => 'form.cyclebook.presentation',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ))
            ->add('format',EntityType::class,array(
                'class' => 'ORGBirdBundle:System',
                'choice_label' => 'value',
                'multiple' => false,
                'query_builder' => function(SystemRepository $repository){
                    $filter = new Filter();
                    $filter->setStrict(true);
                    $filter->setFields(array('filter'));
                    $filter->setComparator(Filter::COMPARATOR_EQ);
                    $filter->setValue('format');
                    $orderBy = new OrderBy();
                    $orderBy->push('value', OrderBy::ORDER_ASC);
                    return $repository->getQueryBuilderFiltered($filter, $orderBy);
                },
                'disabled' => $disabled,
                'label' => 'form.cyclebook.format',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ))
            ->add('cycle', CycleType::class,array(
                'iscycle' => $options['iscycle'],
                'choice_type_extend_field' => $options['choice_type_extend_field_cycle'],
                'disabled' => $disabled,
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'form.cyclebook.save',
                'translation_domain' => 'ORGBirdBundleCycleBook',
            ));;

        if($isCycle){
            $builder->add('volume', NumberType::class,array(
                'disabled' => $disabled,
                'scale' => 0,
                'grouping' => true,
                'required' => true,
                'label' => 'form.cyclebook.volume',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ));
        }

        /**
         * On affiche les champs etendus uniquement ils existent
         * Attention le fichier TWIG doit être adapté
         */
        $builder->addEventListener(Formevents::PRE_SET_DATA, function (FormEvent $event) use($options){
            $form = $event->getForm();
            if($event->getData()->getLinkfieldsbooks()->count() > 0){
                $form->add('linkfieldsbooks',CollectionType::class,array(
                    'entry_type' => ExtendFieldsType::class,
                    'entry_options' => array(
                        'choice_type_extend_field' => $options['choice_type_extend_field']
                    ),
                ));
            }
        });

        $builder->addEventListener(FormEvents::POST_SUBMIT,function (FormEvent $event) use ($isCycle){
            /**
             * Permet de définir les valeurs par défaut dans le cas d'un livre sans cycle
             */
            if(!$isCycle){
                $book = $event->getData();
                $book->setVolume(1);
                $cycle = $book->getCycle();
                $cycle->setNbrvolume(1);
                $cycle->setTitle($event->getData()->getTitle());
            }
        });

        $builder->addEventSubscriber(new AddUploadedImage($options['uploaded_image']));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ORG\BirdBundle\Entity\Book',
            'uploaded_image' => null,
            'choice_type_extend_field' => null,
            'choice_type_extend_field_cycle' => null,
            'iscycle' => false,
        ));
    }


}