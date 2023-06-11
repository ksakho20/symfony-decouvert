<?php

namespace App\Form;

use Doctrine\ORM\Query\Expr\Select;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        /* $builder
            ->add('email',EmailType::class)
            ->add('message',TextareaType::class)
            ->add('submit',SubmitType::class)
            
        ; */
        $builder
            ->add('number1',NumberType::class )
           // ->add('select',SelectType::class)
           ->add('ope', ChoiceType::class, [
            'choices'  => [
                '+' => '+',
                '*' => '*',
                '-' => '-',
                '/' => '/',
            ],
        ])
            ->add('number2',NumberType::class )
            ->add('submit',SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
