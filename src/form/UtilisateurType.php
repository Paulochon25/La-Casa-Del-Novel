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
            ->add('nom',TextType::class, 'attr' => array(
                'placeholder' => 'Nom '
                ) )
            ->add('email', TextareaType::class 'attr' => array(
                'placeholder' => 'Nom ' )
            ->add('prenom', TextType::class 'attr' => array(
                'placeholder' => 'Prenom ')
            ->add('mot_passe', TextType::class 'attr' => array(
                'placeholder' => 'mot_passe ')
            ->add('pseudo', TextType::class 'attr' => array(
                'placeholder' => 'pseudo ')
            ->add('Genre', ChoiceType::class, [
                'choices'  => [
                    'Mr' => 'Homme',
                    'M' => 'Femme',
                ],'attr' => array(
                    'placeholder' => 'Genre '
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