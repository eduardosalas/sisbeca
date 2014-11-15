<?php

namespace sisbeca\sisbecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use sisbeca\sisbecaBundle\Entity\Alumnos;
use sisbeca\sisbecaBundle\Form\validateStudentType;
use sisbeca\sisbecaBundle\Entity\XUser;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * Description of SeguridadController
 *
 * @author jechenique
 */
class SeguridadController extends Controller {

    public function loginAction() {

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('sisbecaBundle:Seguridad:login.html.twig', array(
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
        ));
    }

    
    public function welcomeAction() {


        return $this->render('sisbecaBundle:Seguridad:welcome.html.twig');
    }

    
    public function validateStudentAction(Request $request) {

        $alumnos = new Alumnos();

        $form = $this->createForm(new validateStudentType(), $alumnos);

        $form->setData($alumnos);

        $form->bindRequest($request);

        if ($request->getMethod() == 'POST') {

            $emP = $this->getDoctrine()->getEntityManager();

            $em = $this->getDoctrine()->getEntityManager('iut_dfrp');

            $cedula = $form['cedula']->getData();
            $archivador = $form['archivador']->getData();

            $entity = $em->getRepository('sisbecaBundle:Alumnos')->findOneBy(array('cedula' => $cedula, 'archivador' => $archivador));

            $entityP = $emP->getRepository('sisbecaBundle:XUser')->findOneBy(array('ci' => $cedula));


            if ($entityP != '') {

                $this->get('session')->setFlash('ms', 'Usuario Registrado');
                return $this->render('sisbecaBundle:Seguridad:validateStudent.html.twig', array(
                            'form' => $form->createView()));
            } elseif ($entity != '') {

                $entity1 = new XUser();
                return $this->redirect($this->generateUrl('xuser_new', array('ci' => $cedula,
                                    'entity' => $entity1)));
            } else {

                $this->get('session')->setFlash('ms', 'Datos no Coinciden');
                return $this->render('sisbecaBundle:Seguridad:validateStudent.html.twig', array(
                            'form' => $form->createView()));
            }
        }

        return $this->render('sisbecaBundle:Seguridad:validateStudent.html.twig', array(
                    'form' => $form->createView()));
    }

}
