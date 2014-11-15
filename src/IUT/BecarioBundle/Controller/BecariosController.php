<?php

namespace IUT\BecarioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use IUT\BecarioBundle\Entity\Becarios;
use IUT\BecarioBundle\Form\BecariosType;

/**
 * Becarios controller.
 *
 * @Route("/becarios")
 */
class BecariosController extends Controller
{

    /**
     * Lists all Becarios entities.
     *
     * @Route("/", name="becarios")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IUTBecarioBundle:Becarios')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Becarios entity.
     *
     * @Route("/", name="becarios_create")
     * @Method("POST")
     * @Template("IUTBecarioBundle:Becarios:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Becarios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('becarios_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Becarios entity.
     *
     * @param Becarios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Becarios $entity)
    {
        $form = $this->createForm(new BecariosType(), $entity, array(
            'action' => $this->generateUrl('becarios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Becarios entity.
     *
     * @Route("/new", name="becarios_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Becarios();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Becarios entity.
     *
     * @Route("/{id}", name="becarios_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IUTBecarioBundle:Becarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Becarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Becarios entity.
     *
     * @Route("/{id}/edit", name="becarios_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IUTBecarioBundle:Becarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Becarios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Becarios entity.
    *
    * @param Becarios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Becarios $entity)
    {
        $form = $this->createForm(new BecariosType(), $entity, array(
            'action' => $this->generateUrl('becarios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Becarios entity.
     *
     * @Route("/{id}", name="becarios_update")
     * @Method("PUT")
     * @Template("IUTBecarioBundle:Becarios:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IUTBecarioBundle:Becarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Becarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('becarios_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Becarios entity.
     *
     * @Route("/{id}", name="becarios_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IUTBecarioBundle:Becarios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Becarios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('becarios'));
    }

    /**
     * Creates a form to delete a Becarios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('becarios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
