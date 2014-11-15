<?php

namespace sisbeca\sisbecaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sisbeca\sisbecaBundle\Entity\XUser;
use sisbeca\sisbecaBundle\Entity\XSecurityRole2users;
use sisbeca\sisbecaBundle\Form\XUserType;
use Gregwar\CaptchaBundle\Validator\CaptchaValidator;
use Gregwar\CaptchaBundle\Generator\CaptchaGenerator;
use Gregwar\CaptchaBundle\DataTransformer\EmptyTransformer;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

/**
 * XUser controller.
 *
 */
class XUserController extends Controller {

    /**
     * Lists all XUser entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('sisbecaBundle:XUser')->findAll();

        return $this->render('sisbecaBundle:XUser:index.html.twig', array(
                    'entities' => $entities
        ));
    }

    /**
     * Finds and displays a XUser entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('sisbecaBundle:XUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find XUser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sisbecaBundle:XUser:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to create a new XUser entity.
     *
     */
    public function newAction() {
        $request = $this->getRequest();
        $ci = $request->get('ci');

        $em = $this->getDoctrine()->getEntityManager('iut_dfrp');

        $entityA = $em->getRepository('sisbecaBundle:Alumnos')->find($ci);

        $entity = new XUser();

        $form = $this->createForm(new XUserType(), $entity);

        return $this->render('sisbecaBundle:XUser:new.html.twig', array(
                    'entity' => $entity,
                    'entityA' => $entityA,
                    'ci' => $ci,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new XUser entity.
     *
     */
    public function createAction($ci) {

        $request = $this->getRequest();
        $entity = new XUser();
        // Codificamos el password
        $factory = $this->get('security.encoder_factory');
        $encoder = $factory->getEncoder($entity);
        $entityrol = new XSecurityRole2users();
        $form = $this->createForm(new XUserType(), $entity);
        $form->setData($entity);


        $entity->setCreatedon(new \DateTime('today'));
        $entity->setModifiedon(new \DateTime('today'));

        $idRol = 3;

        $entityrol->setCi($ci);
        $entityrol->setIdRole($idRol);

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity->setpassword($password);

            if ($form->isValid()) {

                $em = $this->get('doctrine')->getEntityManager();
                $em->persist($entity);
                $em->persist($entityrol);
                $em->flush();

                return $this->redirect($this->generateUrl('xuser_show', array('id' => $entity->getId())));
            }
        }
        $emA = $this->getDoctrine()->getEntityManager('iut_dfrp');
        $entityA = $emA->getRepository('sisbecaBundle:Alumnos')->find($ci);
        return $this->render('sisbecaBundle:XUser:new.html.twig', array(
                    'entity' => $entity,
                    'entityA' => $entityA,
                    'ci' => $ci,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing XUser entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('sisbecaBundle:XUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find XUser entity.');
        }

        $editForm = $this->createForm(new XUserType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sisbecaBundle:XUser:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing XUser entity.
     *
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('sisbecaBundle:XUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find XUser entity.');
        }

        $editForm = $this->createForm(new XUserType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('xuser_edit', array('id' => $id)));
        }

        return $this->render('sisbecaBundle:XUser:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a XUser entity.
     *
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('sisbecaBundle:XUser')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find XUser entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('xuser'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
