<?php

namespace UCBL\PidjiBundle\Controller;

use UCBL\PidjiBundle\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Annonce controller.
 *
 */
class AnnonceController extends Controller
{
    /**
     * Lists all Annonce entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('UCBLPidjiBundle:Annonce')->findAll();

        return $this->render('Annonce/index.html.twig', array(
            'annonces' => $annonces,
        ));
    }

    /**
     * Creates a new Annonce entity.
     *
     */
    public function newAction(Request $request)
    {
        $annonce = new Annonce();
        $form = $this->createForm('UCBL\PidjiBundle\Form\AnnonceType', $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('back-office_annonce_show', array('id' => $annonce->getId()));
        }

        return $this->render('Annonce/new.html.twig', array(
            'Annonce' => $annonce,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Annonce entity.
     *
     */
    public function showAction(Annonce $annonce)
    {
        $deleteForm = $this->createDeleteForm($annonce);

        return $this->render('Annonce/show.html.twig', array(
            'Annonce' => $annonce,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Annonce entity.
     *
     */
    public function editAction(Request $request, Annonce $annonce)
    {
        $deleteForm = $this->createDeleteForm($annonce);
        $editForm = $this->createForm('UCBL\PidjiBundle\Form\AnnonceType', $annonce);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('back-office_annonce_edit', array('id' => $annonce->getId()));
        }

        return $this->render('Annonce/edit.html.twig', array(
            'Annonce' => $annonce,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Annonce entity.
     *
     */
    public function deleteAction(Request $request, Annonce $annonce)
    {
        $form = $this->createDeleteForm($annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($annonce);
            $em->flush();
        }

        return $this->redirectToRoute('back-office_annonce_index');
    }

    /**
     * Creates a form to delete a Annonce entity.
     *
     * @param Annonce $annonce The Annonce entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Annonce $annonce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('back-office_annonce_delete', array('id' => $annonce->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
