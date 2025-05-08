<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\StoredThing;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StoredThingType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('label', TextType::class, ['label' => 'form.label.label'])
            ->add('description', TextType::class, ['label' => 'form.label.description'])
            ->add('baseAmount', NumberType::class, ['label' => 'form.label.baseAmount'])
            ->add('save', SubmitType::class, ['label' => 'form.label.save']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StoredThing::class,
        ]);
    }

}
