<?php

namespace App\Form;

use App\Entity\Recruteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
class RecruteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')

            ->add('email')
            ->add('password',PasswordType::class)
            ->add('confirm_password',PasswordType::class)
            ->add('cin_recruteur',TextType::class)
            ->add('nom_recruteur',TextType::class)
            ->add('prenom_recruteur',TextType::class)
            ->add('email_recruteur',EmailType::class)
            ->add('nom_societe',TextType::class)
            ->add('telephone',TextType::class)
            ->add('adresse',TextType::class)
            ->add('lien_site',TextType::class)
            ->add('lien_facebook',TextType::class)
            ->add('lien_linkedin',TextType::class)
            
            ->add('logo',TextType::class)
            ->add('date',DateType::class)
            ->add('domaine',TextType::class)
            ->add('description',TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recruteur::class,
        ]);
    }
}
