<?php

namespace sisbeca\sisbecaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Gregwar\CaptchaBundle\Validator\CaptchaValidator;
use Gregwar\CaptchaBundle\Generator\CaptchaGenerator;

class XUserType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('ci')
                ->add('login')
                ->add('password', 'repeated', array(
                    'first_name' => 'Escriba_su_clave',
                    'second_name' => 'Repita_su_clave',
                    'type' => 'password',
                    'required' => true,
                    'invalid_message' => 'Contraseña no coinciden'))
                ->add('name')
                ->add('email', 'email')
                ->add('archivador')
                ->add('captcha', 'captcha', array(
                    'invalid_message' => 'Codigo Incorrecto',
                    'width' => '162',
                    'height' => '50'))
        ;
    }

    public function getName() {
        return 'sisbeca_sisbecabundle_xusertype';
    }

}
