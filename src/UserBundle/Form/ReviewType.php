<?php
namespace UserBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rate', IntegerType::class, ['label' => "Note sur 10"])
            ->add('comment', TextareaType::class, [
                'label' => "Commentaire",
            ])
            ->add('save', SubmitType::class, array('label' => "Noter le héros"))
            ->getForm()
        ;
    }
}