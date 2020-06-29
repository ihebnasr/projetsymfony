<?php

namespace App\Form;

use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class Candidat1 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email',EmailType::class)
            ->add('prenom_candidat')
            ->add('date_naissance')
            ->add('tel_candidat')
            ->add('genre_candidat',ChoiceType::class, [
                'choices' => [
                    'Femme' => 'Femme',
                    'Homme' => 'Homme',
                ]])
            ->add('domaine_candidat',ChoiceType::class, [
                'choices' => [
                    'Energie' => 'Energie',
                    'Ressources Humaines' => 'RH',
                    'IT & Technology' => 'IT',
                    'Gestion ' => 'Gestion',
                    'Informatique ' => 'Informatique',


                ]])
            ->add('adresse')
         
            ->add('linkedin')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}
