<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 15/06/2017
 * Time: 12:38
 */

namespace ORG\BirdBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class ExtendFieldsType
 * @package ORG\BirdBundle\Form
 */
class ExtendFieldsType extends AbstractType
{
    /**
     * Contruction du formulaire
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventSubscriber(new AddExtendFieldsListener($options['choice_type_extend_field']));
    }

    /**
     * Définition des options
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choice_type_extend_field' => null,
        ));
    }


}