<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FirstLoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text');
        $builder->add('surname', 'text');
        $builder->add('rank', 'choice', array(
            'choices' => array(
                '1' => 'Silver I',
                '2' => 'Silver II',
                '3' => 'Silver III',
                '4' => 'Silver IV',
                '5' => 'Silver Elite',
                '6' => 'Silver Elite Master',
                '7' => 'Gold Nova I',
                '8' => 'Gold Nova II',
                '9' => 'Gold Nova III',
                '10' => 'Gold Nova Master',
                '11' => 'Master Guardian I',
                '12' => 'Master Guardian II',
                '13' => 'Master Guardian Elite',
                '14' => 'Distinguished Master Guardian',
                '15' => 'Legendary Eagle',
                '16' => 'Legendary Eagle Master',
                '17' => 'Supreme Master First Class',
                '18' => 'The Global Elite'
            )
        ));
        $builder->add('steamID', 'text');
        $builder->add('Zapisz', 'submit');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Profile'
        ));
    }

    public function getName()
    {
        return 'firstLogin';
    }
}