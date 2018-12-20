<?php

namespace UCBL\PidjiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use UCBL\PidjiBundle\Entity\Annonce;
use UCBL\PidjiBundle\Entity\Type;
use UCBL\PidjiBundle\Form\AnnonceType;

class KumpitalController extends Controller
{
    public function accueilAction(){
      return  $this->render('UCBLPidjiBundle:accueil:accueil.html.twig');
    }

    public function menuAction(){
        return  $this->render('UCBLPidjiBundle:Default:menu.html.twig');
    }

    public function piedDePageAction(){
        return  $this->render('UCBLPidjiBundle:Default:piedDePage.html.twig');
    }

    public function deposerAnnonceAction(Request $request){
        $annonce = new Annonce();
        $form   = $this->get('form.factory')->create(AnnonceType::class, $annonce);

        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid() && $form->isSubmitted()) {
                if(count($annonce->getImages()->toArray() <= 3))
                {
                    $annonce->setUser($this->getUser());
                    $em = $this->getDoctrine()->getManager();
                    foreach ($annonce->getImages() as $img) {
                        $img->setAnnonce($annonce);
                        $em->persist($img);
                    }

                    $em->persist($annonce);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('confirmation_annonce', 'Votre Annonce a bien été créée ........');

                    return $this->redirectToRoute('ucbl_pidji_user_connecter');
                }
                else{
                    $request->getSession()->getFlashBag()->add('erreur_annonce', 'Le nombre de fichiers maximal autorisé est 3.');

                }

            }
            else{
                $request->getSession()->getFlashBag()->add('erreur_annonce', 'Le formulaire est mal rempli! Veuillez le corriger');

            }
        }

        return  $this->render('UCBLPidjiBundle:deposerAnnonce:deposerAnnonce.html.twig', array(
            'form' => $form->createView())
        );

    }


    public function userConnecterAction(Request $request){
        $listesAnnonces =
            $this->getDoctrine()
                ->getRepository('UCBLPidjiBundle:Annonce')
                ->findBy(array(),array('dateAnnonce'=>'DESC'));

        return $this->render('UCBLPidjiBundle:userConnecter:userConnecter.html.twig',array(
            'listesAnnonces' => $listesAnnonces
        )) ;
    }

    public function offreEtDemandesAction(Request $request, Type $type)
    {
        $listeContenu =
            $this->getDoctrine()
                ->getRepository('UCBLPidjiBundle:Annonce')
                ->findBy(array('types' => $type),array('dateAnnonce'=>'DESC'));

        return $this->render('UCBLPidjiBundle:Default:offresEtdemandes.html.twig',array('listeContenu'=>$listeContenu));
    }

    public function DetailsAction(Request $request, Annonce $annonce)
    {

        return $this->render('UCBLPidjiBundle:Default:details.html.twig',array('detailsAnnonce'=>$annonce));
    }

    public function mesAnnonceAction(Request $request)
    {
        $listeAnnonce =
            $this->getDoctrine()
                ->getRepository('UCBLPidjiBundle:Annonce')
                ->findBy(array('user' => $this->getUser()), array('dateAnnonce'=>'DESC'));

        return $this->render('UCBLPidjiBundle:Annonce:mesAnnonces.html.twig',array(
            'listesAnnonce' => $listeAnnonce));
    }

    public function mesAnnonceModifierAction (Request $request , $id)
    {
        $annonce = $this->getDoctrine()->getRepository('UCBLPidjiBundle:Annonce')->findOneBy(array('id' => $id, 'user' => $this->getUser()));

        $editForm = $this->createForm('UCBL\PidjiBundle\Form\AnnonceType', $annonce);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ucbl_pidji_mes_annonces');
        }

        return $this->render('UCBLPidjiBundle:Annonce:mesAnnoncesModifier.html.twig', array(
            'annonce' => $annonce,
            'edit_form' => $editForm->createView(),
        ));

    }

}
