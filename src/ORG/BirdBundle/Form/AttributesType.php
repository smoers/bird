<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 28/02/2018
 * Time: 13:04
 */

namespace ORG\BirdBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttributesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('value',ChoiceType::class,array(
                'choices' => $options['attributes_choices']['layout'],
                'choice_label' => function($attribute){ return $attribute;},
            ))
            ->add('name',TextType::class);
        //$builder->addEventSubscriber(new UserAttributesListener($builder->getPropertyPath(), $options['attributes_choices']));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ORG\BirdBundle\Model\Elements\Attribute',
            'attributes_choices' => array(),
        ));
    }

}