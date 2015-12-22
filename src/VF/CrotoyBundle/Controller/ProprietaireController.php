<?php

namespace VF\CrotoyBundle\Controller;

use VF\BookingBundle\Entity\Booking;
use VF\CrotoyBundle\Entity\Personne;
use VF\CrotoyBundle\Form\PersonneRechercheType;
use VF\CrotoyBundle\Entity\User;
use VF\CrotoyBundle\Form\sejourRechercheType;
use VF\CrotoyBundle\Entity\sejour;
use VF\CrotoyBundle\Form\sejourType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Exception\AccessDeniedException;


class ProprietaireController extends Controller
{
    public function creesejourpourinviteAction($id, Request $request)
    {   
	    $em = $this->getDoctrine()->getManager();
        $personne = $em->getRepository('VFCrotoyBundle:Personne')->find($id);

	    $sejour = new sejour();
		$sejour->setPersonne($personne);
		
		$repository = $this->getDoctrine()->getManager()->getRepository('VFCrotoyBundle:sejour');

        
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

        return $this->render('VFCrotoyBundle:Proprietaire:confirmationreserv.html.twig', array(
		'sejour' => $sejour,
		'locataire' => $personne
		));
    }

    // À ce stade :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('VFCrotoyBundle:Proprietaire:add.html.twig', array('form' => $form->createView()));
    }

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

            return $this->render('VFCrotoyBundle:Proprietaire:voirPersonne.html.twig', array(
			'locataire' => $personne,
		    'id' => $p->getCp()
		));
        }
    return $this->render('VFCrotoyBundle:Proprietaire:recherchePersonne.html.twig', array('form' => $form->createView(),));
	}
	
	public function menuAction()
	{
	    return $this->render('VFCrotoyBundle:Proprietaire:menu.html.twig');
	}
	
	public function accueilAction()
	{
	    return $this->render('VFCrotoyBundle:Proprietaire:accueil.html.twig');
	}
	
	public function gererAction()
    {
        $lieux=array('Envoyer un courriel à Aimée et Charles Foulon','GAZ SERVICE 80','Assurance Habitation prime','Assurance Habitation prestations',
		'Contrat fuites canalisations'
		);
		$liens=array(
		'Envoyer un courriel à Aimée et Charles Foulon'=>'mailto:aimee.foulon@wanadoo.fr',
		'GAZ SERVICE 80'=>'http://localhost/Crotoy/web/maison/Contrats/gaz_chaudiere_entretien.pdf',
		'Assurance Habitation prime'=>'http://localhost/Crotoy/web/maison/Contrats/Assurance_Habitation.pdf',
		'Assurance Habitation prestations' => 'http://localhost/Crotoy/web/maison/Contrats/Devis_AXA_cgd82_incendie_etc.pdf',
		'Contrat fuites canalisations'=>'http://localhost/Crotoy/web/maison/Contrats/contrat_fuites_canalisations.pdf'
		);
		
		
        return $this->render('VFCrotoyBundle:Proprietaire:menu.html.twig', array(
		'lieux'=>$lieux,
		'liens'=>$liens
		));
    }
}
