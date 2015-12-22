<?php

namespace VF\CrotoyBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Exception\AccessDeniedException;


class HabiterController extends Controller
{
    
	public function accueilAction()
	{
	    return $this->render('VFCrotoyBundle:Habiter:accueil.html.twig');
	}
	
	public function gererAction()
    {
        $lieux=array('Envoyer un courriel à Aimée et Charles Foulon','GAZ SERVICE 80','Assurance Habitation prime','Assurance Habitation prestations',
		'Contrat fuites canalisations'
		);
		$liens=array(
		'Envoyer un courriel à Aimée et Charles Foulon'=>'mailto:aimee.foulon@wanadoo.fr',
		'GAZ SERVICE 80'=>'web/maison/Contrats/gaz_chaudiere_entretien.pdf',
		'Assurance Habitation prime'=>'web/maison/Contrats/Assurance_Habitation.pdf',
		'Assurance Habitation prestations' => 'web/maison/Contrats/Devis_AXA_cgd82_incendie_etc.pdf',
		'Contrat fuites canalisations'=>'web/maison/Contrats/contrat_fuites_canalisations.pdf'
		);
		
		
        return $this->render('VFCrotoyBundle:Habiter:menu.html.twig', array(
		'lieux'=>$lieux,
		'liens'=>$liens
		));
    }
	
	public function internetAction()
	{
			return $this->render('VFCrotoyBundle:Habiter:internet.html.twig');
	}
}
