<?php

namespace VF\CrotoyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CrotoyController extends Controller
{
    public function accueilAction()
    {
        return $this->render('VFCrotoyBundle:Crotoy:accueil.html.twig');
    }

    public function photosAction()
    {
	    // p 432 PHP & MYSQL
		$liste=array();
	    $rep_images='images/';
		$rep=opendir($rep_images);
		while(false!==($fichier=readdir($rep))){
			//Supprime les entrées . et ..
			if($fichier !="."  && $fichier!=".."){
				$liste[]=$fichier;
			}
		}
		
		
        return $this->render('VFCrotoyBundle:Crotoy:photos.html.twig',array(
		'liste'=>$liste
		));
    }
	
	public function menuAction()
    {
        return $this->render('VFCrotoyBundle:Crotoy:menu.html.twig');
    }
}
