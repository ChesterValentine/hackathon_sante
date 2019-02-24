<?php

namespace Cardioscore\AccueilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class AnalysisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('total_cholesterol', IntegerType::class, array(
                'label' => 'Total du cholesterol : '
            ))
            ->add('hdl_cholesterol', IntegerType::class, array(
                'label' => 'HDL Cholesterol : '
            ))
            ->add('systolic_bp', IntegerType::class, array(
                'label' => 'Tension'
            ))
            ->add('treated_blood_pressure', IntegerType::class, array(
                'label' => 'Traitement pour la tension : '
            ))
            ->add('ratioOmega', IntegerType::class, array(
                'label' => 'Ratio omega : '
            ))
            ->add('indexO3', IntegerType::class, array(
                'label' => 'Index O3 : '
            ))
            ->add('aaEpa', IntegerType::class, array(
                'label' => 'AAEPA : '
            ))
            ->add('ratioFd', IntegerType::class, array(
                'label' => 'Ratio FD : '
            ))
            ->add('ratioWaistWeight', IntegerType::class, array(
                'label' => 'Ratio tour de taille/poids : '
            ))
            ->add('ubiote_fb', IntegerType::class, array(
                'label' => 'Ubiote FB : '
            ))
            ->add('ubiote_diversity', IntegerType::class, array(
                'label' => 'Ubiote diversité : '
            ))
            ->add('ubiote_richness', IntegerType::class, array(
                'label' => 'Ubiote richessse : '
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cardioscore\AccueilBundle\Entity\Analysis'
        ));
    }
}
