<?php

namespace VF\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use VF\BlogBundle\Entity\Commentaire;
use VF\BlogBundle\Form\CommentaireType;

class CommentaireController extends Controller
{
	public function lireAction($id)
    {
		$Commentaire=new Commentaire();
		$Commentaire->setTitre("Essai de Commentaire");
		$Commentaire->setAuteur("Auteur");
		$Commentaire->setTexte("C'est fort intéressant. Merci de l'avoir dit tout haut!");
		
		
		
		$em = $this->getDoctrine()->getManager();
        $Commentaire = $em->getRepository('VFBlogBundle:Commentaire')->find($id);
        if (null === $Commentaire) {throw new NotFoundHttpException("Le commentaire d'id ".$id." n'existe pas.");}

      return $this->render('VFBlogBundle:Commentaire:lire.html.twig', array(
		'commentaire' => $Commentaire
		));
    }
	
    public function voirAction($id)
    {
		$Commentaire=new Commentaire();
		$Commentaire->setTitre("Essai de Commentaire");
		$Commentaire->setAuteur("Auteur");
		$Commentaire->setTexte("C'est fort intéressant. Merci de l'avoir dit tout haut!");
		
		
		
		$em = $this->getDoctrine()->getManager();
        $Commentaire = $em->getRepository('VFBlogBundle:Commentaire')->find($id);
        if (null === $Commentaire) {throw new NotFoundHttpException("Le commentaire d'id ".$id." n'existe pas.");}

      return $this->render('VFBlogBundle:Commentaire:voir.html.twig', array(
		'commentaire' => $Commentaire
		));
    }
	
	
	public function addAction($id, Request $request)
    {   
	    if (!$this->get('security.context')->isGranted('ROLE_USER')) {throw new AccessDeniedException('Accès limité aux personnes avec le ROLE_USER.');}

	    $Commentaire = new Commentaire();
		$user=$this->getUser();
		$Commentaire->setAuteur($user->getUsername());
		$em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('VFBlogBundle:article')->find($id);
		$Commentaire->setArticle($article);
        
        $form = $this->createForm(new CommentaireType(), $Commentaire);
		
        if ($form->handleRequest($request)->isValid()) {
			
            $em = $this->getDoctrine()->getManager();
			$em->persist($Commentaire);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Commentaire bien enregistré.');

			return $this->render('VFBlogBundle:Commentaire:voir.html.twig', array('commentaire' => $Commentaire));
		}
	// À ce stade :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('VFBlogBundle:Commentaire:formCommentaire.html.twig', array(
		'form' => $form->createView(),
		'Commentaire' => $Commentaire,
	    'user' => $user));
    }
	
	public function editAction(Request $request, $id)
    {
		$em = $this->getDoctrine()->getManager();
        $Commentaire = $em->getRepository('VFBlogBundle:Commentaire')->find($id);
        if (null === $Commentaire) {throw new NotFoundHttpException("L'Commentaire d'id ".$id." n'existe pas.");}
		
        $form = $this->createForm(new CommentaireType(), $Commentaire);

        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Les données du commentaire ont été modifiées');

            return $this->render('VFBlogBundle:Commentaire:voir.html.twig', array('commentaire' => $Commentaire));
        }
    return $this->render('VFBlogBundle:Commentaire:formEditCommentaire.html.twig', array(
	'form' => $form->createView(),
	'commentaire' => $Commentaire
	));
    }
	
	
	public function deleteAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $Commentaire = $em->getRepository('VFBlogBundle:Commentaire')->find($id);

    if (null === $Commentaire) { throw new NotFoundHttpException("Le commentaire d'id ".$id." n'existe pas.");}

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->createFormBuilder()->getForm();

    if ($form->handleRequest($request)->isValid()) {
      $em->remove($Commentaire);
      $em->flush();
      $request->getSession()->getFlashBag()->add('info', "Le commentaire ".$Commentaire->getId()." a bien été supprimé.");

      return $this->redirect($this->generateUrl('vf_blog_accueil'));
    }

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('VFBlogBundle:Commentaire:delete.html.twig', array(
      'commentaire' => $Commentaire,
      'form'   => $form->createView()
    ));	
	
	}

}
