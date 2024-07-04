<?php

namespace App\Form;

use App\Entity\Groupement;
use App\Entity\Identity;
use App\Entity\Province;
use App\Entity\Secteur;
use App\Entity\Territoire;
use App\Entity\Village;
use App\Model\SearchData;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VillageSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('village', TextType::class, [
                // 'label' => 'Nom du village',
                'required' => false, // Le champ n'est pas obligatoire
                'attr' => [
                    'class' => 'form-control search',
                    'data-nexttab' => 'pills-experience-tab',
                    'placeholder' => 'Recherz votre village',
                ],
            ]);
           
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'methode' => 'GET'
        ]);
    }
}
