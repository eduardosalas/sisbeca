<?php

namespace IUT\BecarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BecariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cedula')
            ->add('username')
            ->add('nombre1')
            ->add('nombre2')
            ->add('ape1')
            ->add('ape2')
            ->add('codCarrera')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IUT\BecarioBundle\Entity\Becarios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'iut_becariobundle_becarios';
    }
}
