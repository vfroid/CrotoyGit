<?php

namespace VF\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\SecurityContext;
use VF\BlogBundle\Entity\article;
use VF\BlogBundle\Form\articleType;
use VF\BlogBundle\Entity\Etat;

class ArticleController extends Controller
{
    public function voirAction($id)
    {
	    $user=$this->getUser();
		$em = $this->getDoctrine()->getManager();
	    $article = $em->getRepository('VFBlogBundle:article')->find($id);
        if (null === $article) {throw new NotFoundHttpException("L'article d'id ".$id." n'existe pas.");}
		
		

		$qb = $em->getRepository('VFBlogBundle:Commentaire')->createQueryBuilder('c');
        $results = $qb->select('c.id')
		    ->where('c.article = :idarticle')
            ->setParameter('idarticle', $article->getId())
            ->orderBy('c.date', 'DESC')
            ->getQuery()
            ->getResult();
         
		//recherche des commentaires associés
		$comm=array();
		
		for($i=0;$i<count($results);$i+=1)
		{
		   $c = $em->getRepository('VFBlogBundle:Commentaire')->find($results[$i]);
		   $comm[]=$c;
		}
		
		
       

      return $this->render('VFBlogBundle:Article:voir.html.twig', array(
		'article' => $article,
		'comm' => $comm,
		'user' => $user,
		));
    }
	
	
	public function addAction(Request $request)
    {   
	    if (!$this->get('security.context')->isGranted('ROLE_INVITE')) {throw new AccessDeniedException('Accès limité aux personnes autorisées à écrire un article.');}

	    $article = new article();
		$user=$this->getUser();
		$article->setAuteur($user->getUsername());
        
		$form = $this->createForm(new articleType(), $article);
		
        if ($form->handleRequest($request)->isValid()) {
			// enregistrer l'article
            $em = $this->getDoctrine()->getManager();
			$em->persist($article);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistré.');
			
			//recherche des commentaires associés
			$qb = $em->getRepository('VFBlogBundle:Commentaire')->createQueryBuilder('c');
            $results = $qb->select('c.id')
		    ->where('c.article = :idarticle')
            ->setParameter('idarticle', $article->getId())
            ->orderBy('c.date', 'DESC')
            ->getQuery()
            ->getResult();
			
			$comm=array();
		
			for($i=0;$i<count($results);$i+=1)
			{
				$c = $em->getRepository('VFBlogBundle:Commentaire')->find($results[$i]);
				$comm[]=$c;
			}

			//envoi de mail 
			$user=$this->getUser();
			$message = \Swift_Message::newInstance()
            ->setSubject($user->getUsername() . ' a écrit un nouvel article.')
            ->setFrom('vincent.froidevaux@bluewin.ch')
            ->setTo('vincent.froidevaux@hotmail.com')
			->setCc('vincent.froidevaux@bluewin.ch')
            ->setBody($this->renderView('VFBlogBundle:Article:email.txt.twig', array(
			'article' => $article,
			'comm' => $comm
			)));
			
			$users = $em->getRepository('VFUserBundle:User')->findAll();
			for($i=0;$i<count($users);$i+=1)
			{
				//$message->addCc($users[$i]->getEmailCanonical());
				$message->addCc('froidevaux@biomed.ee.ethz.ch');
			}
			$this->get('mailer')->send($message);

			$request->getSession()->getFlashBag()->add('notice', 'Le message de création de l\'article a bien été envoyé par courriel');
			
			return $this->render('VFBlogBundle:Article:voir.html.twig', array(
			'article' => $article,
			'comm' => $comm,
			'user' => $user
			));
		}
	// À ce stade :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('VFBlogBundle:Article:formArticle.html.twig', array(
		'form' => $form->createView(),
		'article' => $article,
	    'user' => $user));
    }
	
	public function editAction(Request $request, $id)
    {
		$em = $this->getDoctrine()->getManager();
		$user=$this->getUser();
        $article = $em->getRepository('VFBlogBundle:article')->find($id);
        if (null === $article) {throw new NotFoundHttpException("L'article d'id ".$id." n'existe pas.");}
		
        $form = $this->createForm(new articleType(), $article);

        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Les données de l\'article ont été modifiées');
			
			$qb = $em->getRepository('VFBlogBundle:Commentaire')->createQueryBuilder('c');
            $results = $qb->select('c.id')
		    ->where('c.article = :idarticle')
            ->setParameter('idarticle', $article->getId())
            ->orderBy('c.date', 'DESC')
            ->getQuery()
            ->getResult();
			//recherche des commentaires associés
			$comm=array();
		
			for($i=0;$i<count($results);$i+=1)
			{
				$c = $em->getRepository('VFBlogBundle:Commentaire')->find($results[$i]);
				$comm[]=$c;
			}

            return $this->render('VFBlogBundle:article:voir.html.twig', array(
			'article' => $article,
			'comm' => $comm,
			'user' => $user
			));
        }
    return $this->render('VFBlogBundle:article:formEditArticle.html.twig', array(
	'form' => $form->createView(),
	'article' => $article
	));
    }
	
	
	public function deleteAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $article = $em->getRepository('VFBlogBundle:article')->find($id);

    if (null === $article) { throw new NotFoundHttpException("L'article d'id ".$id." n'existe pas.");}

	//recherche des commentaires associés et SUPPRESSION
			$qb = $em->getRepository('VFBlogBundle:Commentaire')->createQueryBuilder('c');
            $results = $qb->select('c.id')
		    ->where('c.article = :idarticle')
            ->setParameter('idarticle', $article->getId())
            ->orderBy('c.date', 'DESC')
            ->getQuery()
            ->getResult();
			
			$comm=array();
		
			for($i=0;$i<count($results);$i+=1)
			{
				$c = $em->getRepository('VFBlogBundle:Commentaire')->find($results[$i]);
				$em->remove($c);
			}
	
	
    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->createFormBuilder()->getForm();

    if ($form->handleRequest($request)->isValid()) {
      $em->remove($article);
      $em->flush();
      $request->getSession()->getFlashBag()->add('info', "L'article a bien été supprimé.");

      return $this->redirect($this->generateUrl('vf_blog_accueil'));
    }

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('VFBlogBundle:article:delete.html.twig', array(
      'article' => $article,
      'form'   => $form->createView()
    ));	
	
	}

}
