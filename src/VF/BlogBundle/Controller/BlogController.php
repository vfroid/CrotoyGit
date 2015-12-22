<?php

namespace VF\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    public function statuerAction(Request $request)
	{
		$id=htmlspecialchars($_POST['num']);
		$etat=htmlspecialchars($_POST['etat']);
		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('VFBlogBundle:article')->find($id);
		$article->setEtat($etat);
		$em->flush();
		$request->getSession()->getFlashBag()->add('notice', 'Nouveau statut de l\'article : ' . $etat . '.');
		
		$user=$this->getUser();
        return $this->render('VFBlogBundle:Blog:accueil.html.twig', array('user' => $user));
	}

    public function etatAction()
	{
		
		$etat=htmlspecialchars($_POST['etat']);
		$em = $this->getDoctrine()->getManager();
        $liste = array();
		
		$qb = $em->getRepository('VFBlogBundle:article')->createQueryBuilder('a');
        $results = $qb->select('a.id')
			->where('a.etat LIKE :etat')
            ->setParameter('etat', '%'.$etat.'%')
            ->orderBy('a.date', 'DESC')
            ->getQuery()
            ->getResult();

			
		for($i=0;$i<count($results);$i+=1)
        {
		    $a = $em->getRepository('VFBlogBundle:article')->find($results[$i]);
		    $liste[]=$a;
		}
		return $this->render('VFBlogBundle:Blog:etat.html.twig',array(
		'etat' => $etat,
		'liste' => $liste
		));
	}
	
	
	public function tagAction()
	{
		$tag=htmlspecialchars($_POST['tag']);
		$em = $this->getDoctrine()->getManager();
        $liste = array();
		
		$qb = $em->getRepository('VFBlogBundle:article')->createQueryBuilder('a');
        $results = $qb->select('a.id')
			->where('a.tags LIKE :tag')
            ->setParameter('tag', '%'.$tag.'%')
            ->orderBy('a.date', 'DESC')
            ->getQuery()
            ->getResult();

			
		for($i=0;$i<count($results);$i+=1)
        {
		    $a = $em->getRepository('VFBlogBundle:article')->find($results[$i]);
		    $liste[]=$a;
		}
		return $this->render('VFBlogBundle:Blog:tag.html.twig',array(
		'tag' => $tag,
		'liste' => $liste
		));
	}
	
	
	
    public function derniersAction()
	{
		$n=1;
		$em = $this->getDoctrine()->getManager();
        $derniers = array();
		
		$qb = $em->getRepository('VFBlogBundle:article')->createQueryBuilder('a');
        $results = $qb->select('a.id')
			->where('a.etat = :etat')
            ->setParameter('etat', 'Publie')
            ->orderBy('a.date', 'DESC')
            ->getQuery()
            ->getResult();
	    if(count($results)<5){$n=count($results);}else{$n=5;}
        for($i=0;$i<$n;$i+=1)
        {
		    $a = $em->getRepository('VFBlogBundle:article')->find($results[$i]);
		    $derniers[]=$a;
		}
        

		return $this->render('VFBlogBundle:Blog:liste.html.twig',array('liste' => $derniers));
	}
	
	public function listearticlesAction()
	{
		$em = $this->getDoctrine()->getManager();
        $liste=array();
		$qb = $em->getRepository('VFBlogBundle:article')->createQueryBuilder('a');
        $results = $qb->select('a.id')
			->where('a.etat = :etat')
            ->setParameter('etat', 'Publie')
            ->orderBy('a.date', 'DESC')
            ->getQuery()
            ->getResult();
	    if(count($results)<5){$n=count($results);}else{$n=5;}
        for($i=0;$i<$n;$i+=1)
        {
		    $a = $em->getRepository('VFBlogBundle:article')->find($results[$i]);
		    $liste[]=$a;
		}
		return $this->render('VFBlogBundle:Blog:listeTous.html.twig',array('liste' => $liste));
	}
	
	
    public function accueilAction()
    {
        $user=$this->getUser();
        return $this->render('VFBlogBundle:Blog:accueil.html.twig', array('user' => $user));
    }
	
	public function menuAction()
	{
			return $this->render('VFBlogBundle:Blog:menu.html.twig');
	}
}
