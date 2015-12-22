<?php

namespace VF\CrotoyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VoyagerController extends Controller
{
	public function visiterAction()
    {
		$lieux=array('Office de tourisme','Marees','Promenades guidees','Parc du Marquenterre',
		'PASS Destination Baie de Somme',
		);
		$liens=array(
		'Office de tourisme'=>'http://www.crotoybaiedesomme.com/le-crotoy/',
		'Marees'=>'http://maree.info/150',
		'Promenades guidees'=>'http://www.traversee-baiedesomme.com/contact-et-r%C3%A9servation/',
		'PASS Destination Baie de Somme' => 'http://www.baiedesomme.fr/offre_speciale/1-2174-economisez-20',
		'Parc du Marquenterre'=>'http://www.baiedesomme.fr/lieu/1-14-le-parc-du-marquenterre'
		);
		
		
        return $this->render('VFCrotoyBundle:Voyager:visiter.html.twig', array(
		'lieux'=>$lieux,
		'liens'=>$liens
		));
    }

    public function transportsAction()
    {
		$compagnies=array('Train SNCF','Train TER Picardie','P\'tit Train de la Baie de Somme', 
		'BUS : trans\'80', 'Rue-Le Crotoy - Abbeville (ligne 9)',
		'Cayeux sur Mer - St Valery - Abbeville (ligne 6)','TAXIS','VELO','LOCATION VELOS',
		'CARTE Pass\'Evasion','Stationnement'
		
		);
		$liens=array(
		'Train SNCF' => 'http://ch.voyages-sncf.com/fr/',
		'Train TER Picardie'=>'http://www.ter.sncf.com/picardie',
		'P\'tit Train de la Baie de Somme' => 'http://www.cfbs.eu/fr/',
		'BUS : trans\'80'=>'http://www.trans80.fr/reseau.html',
		'Rue-Le Crotoy - Abbeville (ligne 9)'=>'http://www.trans80.fr/horaire.html',
		'Cayeux sur Mer - St Valery - Abbeville (ligne 6)'=>'http://www.trans80.fr/horaire.html',
		'TAXIS'=>'http://www.crotoybaiedesomme.com/venir-au-crotoy/',
		'VELO'=>'http://www.baiecyclette.com/',
		'LOCATION VELOS'=>'http://www.crotoybaiedesomme.com/activit%C3%A9s-et-loisirs/locations-v%C3%A9los/',
		'CARTE Pass\'Evasion'=>'http://www.ter.sncf.com/picardie/offres/decouvrir-nos-tarifs/bon-plan-carte-picardie-pass-evasion/%5Btab%5Ddescriptifdeloffre',
		'Stationnement'=>'http://www.crotoybaiedesomme.com/infos-utiles/info-stationnement/'
		);
        return $this->render('VFCrotoyBundle:Voyager:transports.html.twig', array(
		'compagnies'=>$compagnies,
		'liens'=>$liens
		));
    }

	public function menuAction()
	{
	    return $this->render('VFCrotoyBundle:Voyager:menu.html.twig');
	}
    
}
