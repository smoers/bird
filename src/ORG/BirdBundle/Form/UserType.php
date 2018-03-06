<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 22/02/2018
 * Time: 13:00
 */

namespace ORG\BirdBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array(
                'required' => true,
                'label' => 'security.profile.username',
                'translation_domain' => 'ORGBirdBundleSecurity',
                'error_bubbling' => true,
                ))
            ->add('firstname', TextType::class, array(
                'required' => true,
                'label' => 'security.profile.firstname',
                'translation_domain' => 'ORGBirdBundleSecurity',
                'error_bubbling' => true,
                ))
            ->add('lastname', TextType::class, array(
                'required' => true,
                'label' => 'security.profile.lastname',
                'translation_domain' => 'ORGBirdBundleSecurity',
                'error_bubbling' => true,
            ))
            ->add('email', EmailType::class, array(
                'required' => true,
                'label' => 'security.profile.email',
                'translation_domain' => 'ORGBirdBundleSecurity',
                'error_bubbling' => true,
            ))
            ->add('attributesCollection', CollectionType::class, array(
                'entry_type' => AttributesType::class,
                'label' => false,
                'entry_options' => array('attributes_choices' => $options['attributes_choices']),
            ));

        $builder->add('save', SubmitType::class, array(
            'label' => 'security.profile.save',
            'translation_domain' => 'ORGBirdBundleSecurity',
            ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ORG\BirdBundle\Entity\Security\User',
            'attributes_choices' => array(),
        ));
    }
}