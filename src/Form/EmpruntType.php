<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Livre;
use App\Entity\Emprunt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class EmpruntType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('user',EntityType::class,[
            'class'=> User::class,
            'choice_label'=>'prenom',
            'choice_name'=>ChoiceList::fieldName($this,'id'),
            'choice_value'=>ChoiceList::value($this,'id'),
            'multiple'=>false,
            'expanded'=>false
        ])
        ->add('livre',EntityType::class,[
            'class'=> Livre::class,
            'choice_label'=>'titre',
            'choice_name'=>ChoiceList::fieldName($this,'id'),
            'choice_value'=>ChoiceList::value($this,'id'),
            'multiple'=>false,
            'expanded'=>false
        ]) 
            ->add('date_sortie', HiddenType::class,['mapped' => false])
            ->add('date_rendu', HiddenType::class,['mapped' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Emprunt::class,
        ]);
    }
}
