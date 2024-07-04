<?php

namespace App\Form;

use App\Entity\Groupement;
use App\Entity\Identity;
use App\Entity\Province;
use App\Entity\Secteur;
use App\Entity\Territoire;
use App\Entity\Village;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IdentityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname' , TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'steparrow-gen-info-username-input',
                    'placeholder' => 'Entrez votre nom',
                ],
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'steparrow-gen-info-username-input',
                    'placeholder' => 'Entrez votre postnom',
                ],
            ])
            ->add('nickname', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'steparrow-gen-info-username-input',
                    'placeholder' => 'Entrez votre nom',
                ],
            ])
            ->add('nin', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'steparrow-gen-info-username-input',
                    'placeholder' => 'Entrez votre prenom',
                ],
            ])

            ->add('province', EntityType::class, [
                'class' => Province::class,
                'choice_label' => 'name',
                'placeholder' => 'Province',
                'attr' => [
                    'class' => 'form-select',
                    'aria-label' => '.form-select-sm example',
                ],
            ])
            ->add('territoire', EntityType::class, [
                'class' => Territoire::class,
                'choice_label' => 'name',
                'placeholder' => 'Territoire',
                'attr' => [
                    'class' => 'form-select',
                    'aria-label' => '.form-select-sm example',
                ],
            ])
            ->add('secteur', EntityType::class, [
                'class' => Secteur::class,
                'choice_label' => 'name',
                'placeholder' => 'Secteur',
                'attr' => [
                    'class' => 'form-select',
                    'aria-label' => '.form-select-sm example',
                ],
            ])
            ->add('groupement', EntityType::class, [
                'class' => Groupement::class,
                'choice_label' => 'name',
                'placeholder' => 'Groupement',
                'attr' => [
                    'class' => 'form-select',
                    'aria-label' => '.form-select-sm example',
                ],
            ])
            ->add('village', EntityType::class, [
                'class' => Village::class,
                'choice_label' => 'name',
                'placeholder' => 'Village',
                'attr' => [
                    'class' => 'form-select',
                    'aria-label' => '.form-select-sm example',
                ],
            ])
            
            ->add('submit', SubmitType::class, [
            'label' => 'Submit',
           
                'attr' => [
                    'class' => 'btn btn-success btn-label right ms-auto nexttab nexttab',
                    'data-nexttab' => 'pills-experience-tab',
                ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Identity::class,
        ]);
    }
}
