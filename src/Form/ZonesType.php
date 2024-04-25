<?php

namespace App\Form;

use App\Entity\Zones;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ZonesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('capacity')
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false, // This tells Symfony not to try to map this field to any property on your entity
                'required' => false, // This allows the user to upload a new image or leave the field blank
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Zones::class,
        ]);
    }
}
