<?php

namespace Cardioscore\AccueilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sex', ChoiceType::class, array('required'=>true))
            ->add('birthDate', DateType::class, [
                "widget" => "single_text"
            ])
            ->add('height', IntegerType::class)
            ->add('weight', IntegerType::class)
            ->add('waist', IntegerType::class)
            ->add('smoker', ChoiceType::class)
            ->add('Calculer', SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cardioscore\AccueilBundle\Entity\User'
        ));
    }
}
