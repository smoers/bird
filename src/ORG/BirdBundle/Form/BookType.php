<?php
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
            ->add('linkfieldsbooks',CollectionType::class,array(
                'entry_type' => ExtendFieldsType::class,
                'entry_options' => array(
                    'choice_type_extend_field' => $options['choice_type_extend_field']
                ),
            ))
            ->add('cycle', CycleType::class,array(
                'iscycle' => $options['iscycle'],
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
                'required' => false,
                'label' => 'form.cyclebook.volume',
                'translation_domain' => 'ORGBirdBundleCycleBook',
                'error_bubbling' => true,
            ));
        }

        $builder->addEventSubscriber(new AddUploadedImage($options['uploaded_image']));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ORG\BirdBundle\Entity\Book',
            'uploaded_image' => null,
            'choice_type_extend_field' => null,
            'iscycle' => false,
        ));
    }


}