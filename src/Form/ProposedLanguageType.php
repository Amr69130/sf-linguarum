<?php

namespace App\Form;

use App\Entity\ProposedLanguage;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProposedLanguageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Type de langue',
                'choices' => [
                    'Langue mère' => 'main',
                    'Langue fille' => 'dialect',
                ],
                'expanded' => true,
            ])
            ->add('name', TextType::class, [
                'label' => 'Nom de la langue',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description'
            ])



        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProposedLanguage::class,
        ]);
    }
}
