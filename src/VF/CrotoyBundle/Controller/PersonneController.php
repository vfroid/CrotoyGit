<?php

namespace VF\CrotoyBundle\Controller;

use VF\CrotoyBundle\Entity\Personne;
use VF\CrotoyBundle\Form\PersonneRechercheType;
use VF\CrotoyBundle\Form\PersonneEditType;
use VF\CrotoyBundle\Form\PersonneType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PersonneController extends Controller
{

    public function rechercheAction(Request $request)
	{
	    //Utilisation du champ cp pour transmettre l'ID choisi à l'action voir.
	    //initialise une personne fictive
		$p=new Personne();
		$p->setNom('Alibli');
		$p->setNom('Alibli');
	    $p->setPrenom('Alibli');
		//$p->setDatene('2000-01-01');  déjà initialisée
		$p->setGenre('m');
	    $p->setRue('Alibli');
		$p->setNumero('Alibi');
		$p->setCp(2);
	    $p->setVille('Alibli');
		$p->setTel1('Aliblixxx');
		$p->setTel2('Alibli');
	    $p->setCourriel('alibli@al.com');
		
		$form = $this->createForm(new PersonneRechercheType(), $p);
		
		if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $personne = $em->getRepository('VFCrotoyBundle:Personne')->find($p->getCp());
			if($personne==null){throw new NotFoundHttpException('Aucune personne trouvée avec cet ID');}
            return $this->render('VFCrotoyBundle:Personne:voir.html.twig', array(
			'locataire' => $personne,
		    'id' => $p->getCp()
		));
        }
    return $this->render('VFCrotoyBundle:Personne:formRecherche.html.twig', array('form' => $form->createView(),));
	}
	
	
	
    public function locatairesAction()
	{
	    $em = $this->getDoctrine()->getManager();
        $toutes = $em->getRepository('VFCrotoyBundle:Personne')->findAll();
        if (null === $toutes) {throw new NotFoundHttpException("Aucun locataire enregistré !.");}
		return $this->render('VFCrotoyBundle:Personne:locataires.html.twig', array('toutes' => $toutes));
	}


    public function addAction(Request $request)
    {
        $personne= new Personne();
		$form = $this->createForm(new PersonneType(), $personne);
		
		if ($form->handleRequest($request)->isValid()) {
			//recherche si existe déjà
			$repository = $this->getDoctrine()->getManager()->getRepository('VFCrotoyBundle:Personne');
			
            $existant= $repository->findOneBy(array('courriel' => $personne->getCourriel()));
		    if(!$existant==null){$message='Une personne est déjà enregistrée avec cette adresse de courriel :' . $existant->getCourriel();}
			
			//si n'existe pas -> flush
			else {$message='Cette personne a été enregistrée.';
                $em = $this->getDoctrine()->getManager();
			    $em->persist($personne);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', $personne->getprenom() . ' ' . $personne->getNom() . ' bien enregistré(e).');
				
			}

        return $this->render('VFCrotoyBundle:Personne:add.html.twig', array(
		'locataire' => $personne,
		'message' => $message,
		'existant' => true
		));
        }

	   return $this->render('VFCrotoyBundle:Personne:form.html.twig', array('form' => $form->createView()));
	}
	
	public function editAction(Request $request, $id)
    {
		$em = $this->getDoctrine()->getManager();
        $personne = $em->getRepository('VFCrotoyBundle:Personne')->find($id);
        if (null === $personne) {throw new NotFoundHttpException("La personne d'id ".$id." n'existe pas.");}
		
        $form = $this->createForm(new PersonneEditType(), $personne);

        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Les données ont été modifiées');

            return $this->render('VFCrotoyBundle:Personne:voir.html.twig', array(
		'locataire' => $personne,
		'id' => $id
		));
        }
    return $this->render('VFCrotoyBundle:Personne:formEdit.html.twig', array('form' => $form->createView(),));
    }
	
	
	public function voirAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $personne = $em->getRepository('VFCrotoyBundle:Personne')->find($id);
        if (null === $personne) {throw new NotFoundHttpException("La personne d'id ".$id." n'existe pas.");}

      return $this->render('VFCrotoyBundle:Personne:voir.html.twig', array(
		'locataire' => $personne,
		'id' => $id
		));
    }

    public function deleteAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $personne = $em->getRepository('VFCrotoyBundle:Personne')->find($id);

    if (null === $personne) { throw new NotFoundHttpException("La personne d'id ".$id." n'existe pas.");}

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->createFormBuilder()->getForm();

    if ($form->handleRequest($request)->isValid()) {
      $em->remove($personne);
      $em->flush();
      $request->getSession()->getFlashBag()->add('info', "Les données de la personne ont bien été supprimées.");

      return $this->redirect($this->generateUrl('vf_personne_recherche'));
    }

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('VFCrotoyBundle:Personne:delete.html.twig', array(
      'p' => $personne,
      'form'   => $form->createView()
    ));	
	
	}
	
	public function menuAction()
    {
        return $this->render('VFCrotoyBundle:Personne:menu.html.twig');
    }
}
