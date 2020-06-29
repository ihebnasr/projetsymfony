<?php

namespace App\Form;

use App\Entity\ExperienceProfissionnelle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class ExperienceProfissionnelle1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_exp')
            ->add('date_debut',DateType::class)
            ->add('date_fin',DateType::class)
            ->add('entreprise')
            ->add('description')
            ->add('candidat')
            ->add('ajouter', SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ExperienceProfissionnelle::class,
        ]);
    }
}
