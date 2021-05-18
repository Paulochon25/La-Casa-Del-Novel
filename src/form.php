<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Classutilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class )
            ->add('email', TextareaType::class)
            ->add('categorie', TextType::class)
            ->add('prenom', TextType::class)
            ->add('mot_passe', TextType::class)
            ->add('pseudo', TextType::class)
            ->add('Genre', ChoiceType::class, [
                'choices'  => [
                    'Mr' => 'Homme',
                    'M' => 'Femme',
                ],
            ]);
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}