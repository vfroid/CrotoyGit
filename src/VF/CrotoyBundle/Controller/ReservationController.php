<?php

namespace VF\CrotoyBundle\Controller;

use VF\BookingBundle\Entity\Booking;
use VF\CrotoyBundle\Entity\Personne;
use VF\CrotoyBundle\Entity\User;
use VF\CrotoyBundle\Form\sejourRechercheType;
use VF\CrotoyBundle\Entity\sejour;
use VF\CrotoyBundle\Form\sejourType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ReservationController extends Controller
{

	    public function addinviteAction(Request $request, $id=0)
    {   
	    if (!$this->get('security.context')->isGranted('ROLE_RESERVANT')) {throw new AccessDeniedException('Accès limité aux personnes avec le ROLE_RESERVANT.');}

	    $sejour = new sejour();
        if($id>0){
			$em = $this->getDoctrine()->getManager();
			$personne = $em->getRepository('VFCrotoyBundle:personne')->find($id);
		}
		else{throw new AccessDeniedException('La personne invitée ne peut pas avoir un id = 0 ');}
		
			
		$sejour->setPersonne($personne);
        
        $form = $this->createForm(new sejourType(), $sejour);
		
        if ($form->handleRequest($request)->isValid()) {
		    $booking=new Booking();
			$booking->setStart($sejour->getDebut());
			$booking->setEnd($sejour->getFin());
			$booking->setSejour($sejour);
			
            $em = $this->getDoctrine()->getManager();
			$em->persist($sejour);
			$em->persist($booking);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Séjour bien enregistré.');

        return $this->render('VFCrotoyBundle:Reservation:confirmationreserv.html.twig', array(
		'sejour' => $sejour,
		'locataire' => $personne
		));
    }

    // À ce stade :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('VFCrotoyBundle:Reservation:add.html.twig', array(
		'form' => $form->createView(),
		'personne' => $personne));
    }

    public function rechercheAction(Request $request)
	{
	    //Utilisation du champ Njeunes pour transmettre l'ID choisi à l'action voir.
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
		
		//crée une réservation avec cette personne fictive
		$r=new sejour();
		$r->setPersonne($p);
		
		$user=$this->getUser();
		
		$form = $this->createForm(new sejourRechercheType(), $r);
		
		if ($form->handleRequest($request)->isValid()) {
			  if ($r->getNjeunes() == 0) {throw new NotFoundHttpException("Le séjour d'id = 0 n'existe pas.");}
			  
            $em = $this->getDoctrine()->getManager();
            $sejour = $em->getRepository('VFCrotoyBundle:sejour')->find($r->getNjeunes());

            return $this->render('VFCrotoyBundle:Reservation:voir.html.twig', array(
			'r' => $sejour,
		    'id' => $r->getNjeunes(),
			'user' => $user
		));
        }
    return $this->render('VFCrotoyBundle:Reservation:recherche.html.twig', array('form' => $form->createView(),));
	}
	
    public function editAction($id, Request $request)
    {
		$em = $this->getDoctrine()->getManager();
        $sejour = $em->getRepository('VFCrotoyBundle:sejour')->find($id);
        if (null === $sejour) {throw new NotFoundHttpException("La réservation d'id ".$id." n'existe pas.");}
		
        $form = $this->createForm(new sejourType(), $sejour);

        if ($form->handleRequest($request)->isValid()) {
		
			// mise à jour du booking correspondant
			$qb = $em->getRepository('VFBookingBundle:Booking')->createQueryBuilder('b');
			$results = $qb->select('b.id')
            ->where('b.sejour = :idsejour')
            ->setParameter('idsejour', $sejour->getId())
            ->getQuery()
            ->getResult();
			
			$booking=$em->getRepository('VFBookingBundle:Booking')->find($results[0]);
			$booking->setStart($sejour->getDebut());
			$booking->setEnd($sejour->getFin());
			$booking->setSejour($sejour);
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Les données de la réservation ont été modifiées');

			
			
            return $this->render('VFCrotoyBundle:Reservation:confirmationreserv.html.twig', array(
		'sejour' => $sejour,
		'id' => $id
		));
        }
    return $this->render('VFCrotoyBundle:Reservation:edit.html.twig', array('form' => $form->createView(),));
    }
	
    public function addAction(Request $request)
    {   
	    if (!$this->get('security.context')->isGranted('ROLE_RESERVANT')) {throw new AccessDeniedException('Accès limité aux personnes avec le ROLE_RESERVANT.');}

	    $sejour = new sejour();
       
		$user = $this->getUser(); 
		$personne= $user->getPersonne();
		$sejour->setPersonne($personne);
        
        $form = $this->createForm(new sejourType(), $sejour);
		
        if ($form->handleRequest($request)->isValid()) {
		    $booking=new Booking();
			$booking->setStart($sejour->getDebut());
			$booking->setEnd($sejour->getFin());
			$booking->setSejour($sejour);
			
            $em = $this->getDoctrine()->getManager();
			$em->persist($sejour);
			$em->persist($booking);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Séjour bien enregistré.');

        return $this->render('VFCrotoyBundle:Reservation:confirmationreserv.html.twig', array(
		'sejour' => $sejour,
		'locataire' => $personne
		));
    }

    // À ce stade :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('VFCrotoyBundle:Reservation:add.html.twig', array('form' => $form->createView(),'personne' => $personne));
    }


    public function voirAction($id)
    {
	    if ($id == 0) {throw new NotFoundHttpException("Le séjour d'id ".$id." n'existe pas.");}
        $em = $this->getDoctrine()->getManager();
        $sejour = $em->getRepository('VFCrotoyBundle:Reservation')->find($id);
        if (null === $sejour) {throw new NotFoundHttpException("Le séjour d'id ".$id." n'existe pas.");}

      return $this->render('VFCrotoyBundle:Reservation:voir.html.twig', array(
		'sejour' => $sejour,
		'id' => $id
		));
    }
	
	public function toutesAction()
	{
	    $em = $this->getDoctrine()->getManager();
        $toutes = $em->getRepository('VFCrotoyBundle:sejour')->findAll();
        if (null === $toutes) {throw new NotFoundHttpException("Aucune réservation n'est enregistrée !.");}
		return $this->render('VFCrotoyBundle:Reservation:toutes.html.twig', array('toutes' => $toutes));
	}
	
	 public function deleteAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
	
	//ATTENTION: pour supprimer un séjour, il faut supprimer le Booking correspondant et la cascade fait le reste
    $sejour = $em->getRepository('VFCrotoyBundle:sejour')->find($id);
	    if (null === $sejour) { throw new NotFoundHttpException("Le séjour d'id ".$id." n'existe pas.");}
		
		//recherche du booking correspondant
		$em = $this->getDoctrine()->getManager();
	    $qb = $em->getRepository('VFBookingBundle:Booking')->createQueryBuilder('b');
        $results = $qb->select('b.id')
            ->where('b.sejour = :idsejour')
            ->setParameter('idsejour', $sejour->getId())
            ->getQuery()
            ->getResult();

			
	$booking = $em->getRepository('VFBookingBundle:Booking')->find($results[0]);
    if (null === $booking) { throw new NotFoundHttpException("Le Booking lié au séjour d'ID = $id n'existe pas.");}

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->createFormBuilder()->getForm();

    if ($form->handleRequest($request)->isValid()) {
      $em->remove($booking);
      $em->flush();
      $request->getSession()->getFlashBag()->add('info', "La réservation a été supprimée.");

      return $this->redirect($this->generateUrl('vf_reservation_recherche'));
    }

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('VFCrotoyBundle:Reservation:delete.html.twig', array(
      'sejour' => $sejour,
      'form'   => $form->createView()
    ));	
	
	}

    public function menuAction()
    {
        return $this->render('VFCrotoyBundle:Reservation:menu.html.twig');
    }
}
