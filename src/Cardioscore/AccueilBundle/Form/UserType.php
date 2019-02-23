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
            ->add('sex', ChoiceType::class, array(
                'label' => 'Sexe : ',
                'choices' => array(
                    'homme' => true,
                    'femme' => false
                ),
                'required'=>true))
            ->add('birthDate', DateType::class, array(
                'label'  => 'Date d\'anniversaire : ',
                "widget" => "single_text"
            ))
            ->add('height', IntegerType::class, array(
                'label' => 'Taille : '
            ))
            ->add('weight', IntegerType::class, array(
                'label' => 'Poids : '
            ))
            ->add('waist', IntegerType::class, array(
                'label' => 'Tour de taille : '
            ))
            ->add('smoker', ChoiceType::class, array(
                'label' => 'Fumeur : ',
                'choices'   => array(
                    'Oui'   => true,
                    'Non'   => false
                ))
            )
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
