<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
                'label' => 'Accepter la politique de confidentialité'
            ])
            ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'type' => PasswordType::class,
                'attr' => ['autocomplete' => 'new-password'],
                'first_options' => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répétez le mot de passe'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 100,
                    ]),
                ],
            ])
            ->add('pseudo', TextType::class, [
                'attr' => ['label' => 'Pseudo'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous n\'avez pas entré de pseudo.',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Your pseudo should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 50,
                    ]),
                ],
            ])
            ->add('birthdate', DateType::class, [
                'years' => range(date('Y'), date('Y')-50),
                'format' => ('d M y'),

            ])
            ->add('presentation', TextareaType::class, [
                'attr' => ['label' => 'Présentation'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Petite présentation de vous même'
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => '8 charactères minimum.',
                        'max' => 532,
                    ])
                ]
            ])
            ->add('role', TextType::class, [
                'attr' => ['label' => 'Choisissez votre rôle', 'placeholder' => 'Membre / Traducteur'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous devez choisir un rôle'
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Membre est le rôle par défaut',
                        'max' => 532,
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
