<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Programme;
use AppBundle\Form\ProgrammeType;

/**
 * Programme controller.
 *
 * @Route("/programme")
 */
class ProgrammeController extends Controller
{
    /**
     * Lists all Programme entities.
     *
     * @Route("/", name="programme_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $programmes = $em->getRepository('AppBundle:Programme')->findAll();

        return $this->render('programme/index.html.twig', array(
            'programmes' => $programmes,
        ));
    }

    /**
     * Creates a new Programme entity.
     *
     * @Route("/new", name="programme_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $programme = new Programme();
        $form = $this->createForm('AppBundle\Form\ProgrammeType', $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($programme);
            $em->flush();

            return $this->redirectToRoute('programme_show', array('id' => $programme->getId()));
        }

        return $this->render('programme/new.html.twig', array(
            'programme' => $programme,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Programme entity.
     *
     * @Route("/{id}", name="programme_show")
     * @Method("GET")
     */
    public function showAction(Programme $programme)
    {
        $deleteForm = $this->createDeleteForm($programme);

        return $this->render('programme/show.html.twig', array(
            'programme' => $programme,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Programme entity.
     *
     * @Route("/{id}/edit", name="programme_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Programme $programme)
    {
        $deleteForm = $this->createDeleteForm($programme);
        $editForm = $this->createForm('AppBundle\Form\ProgrammeType', $programme);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($programme);
            $em->flush();

            return $this->redirectToRoute('programme_edit', array('id' => $programme->getId()));
        }

        return $this->render('programme/edit.html.twig', array(
            'programme' => $programme,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Programme entity.
     *
     * @Route("/{id}", name="programme_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Programme $programme)
    {
        $form = $this->createDeleteForm($programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($programme);
            $em->flush();
        }

        return $this->redirectToRoute('programme_index');
    }

    /**
     * Creates a form to delete a Programme entity.
     *
     * @param Programme $programme The Programme entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Programme $programme)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('programme_delete', array('id' => $programme->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
