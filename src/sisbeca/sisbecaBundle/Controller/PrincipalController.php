<?php

/**
 * Description of SeguridadController
 *
 * @author jechenique
 */

namespace sisbeca\sisbecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrincipalController extends Controller {

    public function aboutAction() {


        return $this->render('sisbecaBundle:Principal:aboutUs.html.twig');
    }

    public function readmoreAction() {


        return $this->render('sisbecaBundle:Principal:readMore.html.twig');
    }

}
