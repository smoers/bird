<?php
/**
 * Created by PhpStorm.
 * User: a49974
 * Date: 7/08/2017
 * Time: 13:19
 */

namespace ORG\BirdBundle\Form;


use ORG\BirdBundle\Entity\Book;
use ORG\BirdBundle\Model\Filter\Filter;
use ORG\BirdBundle\Model\OrderBy\OrderBy;
use ORG\BirdBundle\Repository\SystemRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CycleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $disabled = $options['disabled'];
        $isCycle = $options['iscycle'];

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
            ));

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
            ))
            ->add('linkfieldscycles',CollectionType::class,array(
                'entry_type' => ExtendFieldsType::class,
                'entry_options' => array(
                    'choice_type_extend_field' => $options['choice_type_extend_field']
                ),
            ));
        }


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ORG\BirdBundle\Entity\Cycle',
            'uploaded_image' => null,
            'choice_type_extend_field' => null,
            'iscycle' => false,
        ));
    }


}