<?php

namespace App\Form;

use App\Entity\External\CodeRome;
use App\Entity\LHEO\Dicts\Niveau;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class SearchFormType
 *
 * @package App\Form
 */
class SearchFormType extends AbstractType
{
    /**
     * Formulaire de Recherche de formations
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('search')
            ->add('domain', EntityType::class, [
                'class' => CodeRome::class,
                'choice_label' => 'libelle'])
            ->add('status',ChoiceType::class,array(
                'choices'  => array(
                    'Salarié' => 1,
                    "Demandeur d'emploi" => 2,
                ),
                'expanded' => true,
                'multiple' => false
            ))
            ->add('levelIn', EntityType::class, [
                'class' => Niveau::class,
                'choice_label' => 'name',
                'choice_value' => 'level',
            ])
            ->add('levelOut', EntityType::class, [
                'class' => Niveau::class,
                'choice_label' => 'name',
                'choice_value' => 'level'
            ])
            ->add('cpf', CheckboxType::class, [
                'label'    => 'Formations éligibles au CPF',
                'required' => false,
            ])
            ->add('alreadyStarted', CheckboxType::class, [
                'label'    => 'Afficher les formations déja commencées',
                'required' => false,
            ]);
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
