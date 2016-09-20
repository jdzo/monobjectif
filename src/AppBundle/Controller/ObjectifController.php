<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Objectif;
use AppBundle\Repository\ObjectifRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ObjectifController extends Controller
{
    /**
    * Matches /Objectif exactly
    *
    * @Route("/Objectif/{slug}", name="objectif_index")
    */
    public function indexAction(Request $request)
    {
        return $this->render('objectif/index.html.twig');
    }

    public function ficheAction($id){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Objectif');      
        $objectif = $repository->myFindOne($id);
        if (!$objectif) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
        print_r($objectif);
        return $this->render('objectif/objectif.html.twig',array('objectif' => $objectif) );
    } 
    public function listeAction(){
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Objectif');      
        $objectifs = $repository->myFindAll();
        return $this->render('objectif/objectifs.html.twig', array('objectifs' => $objectifs));
    }

    public function addObjecticfAction(Request $request){
    }

    public function formObjectifAction(Request $request){
        $objectif=new Objectif();
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Objectif');      
        $listAdverts = $repository->myFindAll();
       
        $form = $this->createFormBuilder($objectif)
        ->add('titre', TextType::class)
        ->add('libelle', TextType::class)
        ->add('description', TextType::class)
        ->add('Valider', SubmitType::class, array('label' => 'Creer un Objectif'))
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $objectif = $form->getData();
            //print_r($objectif) ; die();
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($objectif);
            $em->flush();

            return $this->redirectToRoute('objectif_submit_success');
        }

        return $this->render('objectif/form.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function deleteObjecticfAction(Request $request){
    } 
    public function updateObjecticfAction(Request $request){
    }
}
