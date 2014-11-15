<?php

namespace sisbeca\sisbecaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


/**
 * Description of validateStudentType
 *
 * @author jechenique
 */

class validateStudentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
          
            ->add('cedula')
            ->add('archivador');
    }

    public function getName()
    {
        return 'validateStudent';
    }
}
