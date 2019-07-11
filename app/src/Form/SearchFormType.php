<?php

namespace App\Form;

use App\Entity\External\CodeRome;
use App\Entity\LHEO\Dicts\Niveau;
use App\Entity\LHEO\FirstCircle\DomaineFormation;
use App\Entity\LHEO\Structurels\Formation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('search')
//            ->add('domain')
            ->add('domain', EntityType::class, [
                // looks for choices from this entity
                'class' => CodeRome::class,
                'choice_label' => 'libelle'])
                // uses the User.username property as the visible option string
//                'choice_label' => 'codeRomes'])
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

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
//            'data_class' => Formation::class,
        ]);
    }
}
