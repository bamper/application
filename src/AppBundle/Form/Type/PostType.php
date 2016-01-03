<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type', 'choice', array(
            'choices' => array(
                '1' => 'Matchmaking',
                '2' => 'ESEA',
                '3' => 'FACEIT',
                '4' => 'any'
            )
        ));
        $builder->add('note','textarea');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Post'
        ));
    }


    public function getName()
    {
        return 'post';
    }

}
