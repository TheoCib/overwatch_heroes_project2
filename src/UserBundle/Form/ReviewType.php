<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReviewType extends AbstractType
{
        public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rate', RangeType::class, array(
                'label' => " ",
                'attr' => array(
                    'onChange' => 'displayRangeValue()',
                    'min' => 0,
                    'max' => 10,
                    'value' => 0,)
            ))
            ->add('comment', TextareaType::class, ['label' => "Commentaire : ",
            ])
            ->add('save', SubmitType::class, array('label' => "Noter le héros"))
            ->getForm()
        ;
    }



}
