<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 7/06/2017
 * Time: 12:22
 */

namespace ORG\BirdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class AuthorType
 * @package ORG\BirdBundle\Form
 */
class AuthorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lastname',TextType::class,array(
                'required' => true,
                'label' => 'form.author.lastname',
                'translation_domain' => 'ORGBirdBundleAuthor',
                'error_bubbling' => true,
            ))
            ->add('firstname',TextType::class,array(
                'required' => false,
                'label' => 'form.author.firstname',
                'translation_domain' => 'ORGBirdBundleAuthor',
                'error_bubbling' => true,
            ))
            ->add('bornLastname',TextType::class,array(
                'required' => false,
                'label' => 'form.author.bornLastname',
                'translation_domain' => 'ORGBirdBundleAuthor',
                'error_bubbling' => true,
            ))
            ->add('bornFirstname', TextType::class,array(
                'required' => false,
                'label' => 'form.author.bornFirstname',
                'translation_domain' => 'ORGBirdBundleAuthor',
                'error_bubbling' => true,
            ))
            ->add('biography', TextareaType::class,array(
                'required' => false,
                'label' => 'form.author.biography',
                'translation_domain' => 'ORGBirdBundleAuthor',
                'error_bubbling' => true,
            ))
            ->add('comment', TextType::class,array(
                'required' => false,
                'label' => 'form.author.comment',
                'translation_domain' => 'ORGBirdBundleAuthor',
                'error_bubbling' => true,
            ))
            ->add('borndate', DateType::class,array(
                'required' => false,
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'widget' => 'single_text',
                'label' => 'form.author.borndate',
                'translation_domain' => 'ORGBirdBundleAuthor',
                'error_bubbling' => true,
            ))
            ->add('deathdate', DateType::class,array(
                'required' => false,
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'widget' => 'single_text',
                'label' => 'form.author.deathdate',
                'translation_domain' => 'ORGBirdBundleAuthor',
                'error_bubbling' => true,
            ))
            ->add('linkfieldsauthors',CollectionType::class,array(
                'entry_type' => ExtendFieldsType::class,
                'entry_options' => array(
                    'choice_type_extend_field' => $options['choice_type_extend_field']
                ),
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'form.author.save',
                'translation_domain' => 'ORGBirdBundleAuthor',
                ));

        $builder->addEventSubscriber(new AddUploadedImage($options['uploaded_image']));

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ORG\BirdBundle\Entity\Author',
            'uploaded_image' => null,
            'choice_type_extend_field' => null,
            ));
    }

}