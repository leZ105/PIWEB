<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Zones;
use App\Entity\Tables; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 

class Reservation1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idC')
            ->add('zone', EntityType::class, [
                'class' => Zones::class,
                'choice_label' => 'nom',
            ])
            ->add('tableId', EntityType::class, [ 
                'class' => Tables::class,
                'choice_label' => 'tableId', 
            ])
            ->add('dater')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'On Hold' => 'on_hold',
                    'In Progress' => 'in_progress',
                    'Completed' => 'completed',
                    'Cancelled' => 'cancelled',
                ],
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
