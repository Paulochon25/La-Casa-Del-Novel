<?php

namespace App\Form;

use App\Entity\Novel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class AddNovelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['label' => 'Nom du novel'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous n\'avez pas entré de nom pour le novel.',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Le nom du LN doit faire entre 8 et 120 caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 120,
                    ]),
                ],
            ])
            ->add('length', NumberType::class, [
                'attr' => ['label' => 'Nombre de chapitres'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous n\'avez pas entré le nombre de chapitres.',
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => '2 caractères mini, 5 max.',
                        // max length allowed by Symfony for security reasons
                        'max' => 5,
                    ]),
                ],
            ])
            ->add('resume', TextareaType::class, [
                'attr' => ['label' => 'Synopsis'],
            ])
            ->add('note', NumberType::class, [
                'attr' => ['label' => 'Note','min' => 0, 'max' => 10],

            ])
            ->add('statut', TextType::class, [
                'attr' => ['label' => 'Statut'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Novel::class,
        ]);
    }
}
