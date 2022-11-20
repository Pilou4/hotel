<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('firstname',
            TextType::class,
            [
                'label' => false,
                'label_attr' => ['class' => 'contact__form__label'],
                'attr' => [
                    'class' => 'contact__form__input',
                    'placeholder'=> 'Votre prénom',
                ]
            ]
        );
        $builder->add('lastname',
            TextType::class,
            [
                'label' => false,
                'label_attr' => ['class' => 'contact__form__label'],
                'attr' => [
                    'class' => 'contact__form__input',
                    'placeholder'=> 'Votre nom',
                ]
            ]
        );
        $builder->add('mail',
            EmailType::class,
            [
                'label' => false,
                'label_attr' => ['class' => 'contact__form__label'],
                'attr' => [
                    'class' => 'contact__form__input',
                    'placeholder'=> 'Votre adresse email',
                ]
            ]
        );
        $builder->add('phone',
            TextType::class,
            [
                'label' => false,
                'label_attr' => ['class' => 'contact__form__label'],
                'attr' => [
                    'class' => 'contact__form__input',
                    'placeholder'=> 'Votre numéro de téléphone',
                ]
            ]
        );
        $builder->add('message',
                TextareaType::class,
                [
                    'label' => false,
                    'label_attr' => ['class' => 'contact__form__label'],
                    'attr' => [
                        'class' => 'contact__form__textarea',
                        'placeholder'=> 'Votre Message',
                    ]
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}