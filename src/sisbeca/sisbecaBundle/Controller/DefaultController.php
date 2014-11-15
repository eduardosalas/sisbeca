<?php

namespace sisbeca\sisbecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('sisbecaBundle:Default:index.html.twig', array('name' => $name));
    }
}
