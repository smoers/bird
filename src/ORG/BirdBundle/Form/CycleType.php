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
 * Date: 7/08/2017
 * Time: 13:19
 */

namespace ORG\BirdBundle\Form;


use ORG\BirdBundle\Model\Filter\Filter;
use ORG\BirdBundle\Model\OrderBy\OrderBy;
use ORG\BirdBundle\Repository\AuthorRepository;
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

class CycleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $disabled = $options['disabled'];
        $isCycle = $options['iscycle'];
        $isEdit = $options['isedit'];

        $builder->add('type',EntityType::class,array(
            'class' => 'ORGBirdBundle:System',
            'choice_label' => 'value',
            'multiple' => false,
            'query_builder' => function(SystemRepository $repository){
                $filter = new Filter();
                $filter->setStrict(true);
                $filter->setFields(array('filter'));
                $filter->setComparator(Filter::COMPARATOR_EQ);
                $filter->setValue('type');
                $orderBy = new OrderBy();
                $orderBy->push('value', OrderBy::ORDER_ASC);
                return $repository->getQueryBuilderFiltered($filter, $orderBy);
            },
            'disabled' => $disabled,
            'label' => 'form.cyclebook.type',
            'translation_domain' => 'ORGBirdBundleCycleBook',
            'error_bubbling' => true,
            ))
        ->add('authors',EntityType::class,array(
            'class' => 'ORGBirdBundle:Author',
            'choice_label' => function ($author){
              return $author->getLastname().' '.$author->getFirstname();
            },
            'query_builder' => function(AuthorRepository $authorRepository){
                $orderBy = new OrderBy();
                $orderBy->push('lastname', OrderBy::ORDER_ASC);
                $orderBy->push('firstname', OrderBy::ORDER_ASC);
                return $authorRepository->getQueryBuilderOrderBy($orderBy);
            },
            'multiple' => true,
            'disabled' => $disabled,
            'label' => 'form.cyclebook.author',
            'translation_domain' => 'ORGBirdBundleCycleBook',
            'error_bubbling' => true,

        ));

        if($isEdit){
            $builder->add('save', SubmitType::class, array(
                'label' => 'form.cyclebook.save',
                'translation_domain' => 'ORGBirdBundleCycleBook',
            ));;
        }

        //Si nous sommes dans le case d'un cycle
        if($isCycle){
            $builder->add('comment', TextareaType::class, array(
                'disabled' => $disabled,
                'required' => false,
                'label' => 'form.cyclebook.comment',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ))
            ->add('nbrvolume', NumberType::class, array(
                'disabled' => $disabled,
                'scale' => 0,
                'grouping' => true,
                'required' => true,
                'label' => 'form.cyclebook.nbrvolume',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ))
            ->add('title', TextType::class, array(
                'disabled' => $disabled,
                'required' => true,
                'label' => 'form.cyclebook.title',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ));

            /**
             * On affiche les champs etendus uniquement ils existent
             * Attention le fichier TWIG doit être adapté
             */
            $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($options) {
                $form = $event->getForm();
                if($event->getData()->getLinkfieldscycles()->count() > 0){
                    $form->add('linkfieldscycles',CollectionType::class,array(
                        'entry_type' => ExtendFieldsType::class,
                        'entry_options' => array(
                            'choice_type_extend_field' => $options['choice_type_extend_field']
                        ),
                    ));
                }
            });
        }

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ORG\BirdBundle\Entity\Cycle',
            'uploaded_image' => null,
            'choice_type_extend_field' => null,
            'iscycle' => false,
            'isedit' => false,
        ));
    }


}