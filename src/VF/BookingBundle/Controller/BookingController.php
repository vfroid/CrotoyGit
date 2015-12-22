<?php

namespace VF\BookingBundle\Controller;

use VF\CrotoyBundle\Entity\Personne;
use VF\CrotoyBundle\Entity\User;
use VF\CrotoyBundle\Form\sejourRechercheType;
use VF\CrotoyBundle\Entity\sejour;
use VF\CrotoyBundle\Form\sejourType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\ORM\QueryBuilder;


class BookingController extends Controller
{
    public function capterAction()
	{
	    $date= date('Y-m-j'); //date du jour
		return $this->render('VFBookingBundle:Booking:capter.html.twig',array('jour' => $date));	
	}
	
	
    public function calendrierAction(Request $request)
    {
	    $date=htmlspecialchars($_POST['date']);
	    $months=htmlspecialchars($_POST['mois']);
	    $em = $this->getDoctrine()->getManager();
	    $bookings = $em->getRepository('VFBookingBundle:Booking')->findAll(array());
		
		$couleurs=array(
			'Vincent'=>'yellow',
			'Françoise'=>'yellow',
			'Paul'=>'blue', 
			'Romain'=>'#009505', 
			'Marine'=>'red'
			);
		
        return $this->render('VFBookingBundle:Booking:month.html.twig',array(
		'bookings' => $bookings,
		'months' => htmlspecialchars($_POST['mois']),
		'start'=> htmlspecialchars($_POST['date']),
		'couleurs'=>$couleurs
		));
    }
	
    public function datelibre(\DateTime $date)
    {
	    $em = $this->getDoctrine()->getManager();
	    $qb = $em->getRepository('VFBookingBundle:Booking')->createQueryBuilder('b');
        $results = $qb->select('b.id')
            ->where('b.start <= :date AND b.end >= :date')
            //->andWhere('b.item = :item')
            //->setParameter('item', $item)
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult();

        return count($results) === 0;
    }
  
    public function periodelibre($sejour)
	{
	    $em = $this->getDoctrine()->getManager();
	    $qb = $em->getRepository('VFBookingBundle:Booking')->createQueryBuilder('b');
        $query = $qb->select('b.id')
            ->where('b.start <= :start AND b.end >= :end')
            ->orWhere('b.start >= :start AND b.end <= :end')
            ->orWhere('b.start >= :start AND b.end >= :end AND b.start <= :end')
            ->orWhere('b.start <= :start AND b.end <= :end AND b.end >= :start')

            //->andWhere('b.item = :item')
            ->setParameters(array(
                'start'=> $sejour->getDebut(),
                'end'  => $sejour->getFin(),
            //    'item' => $sejour
            ))
            ;

        $results = $query->getQuery()->getResult();

        return count($results) === 0;
	}

	public function bookAction()
    {
	    $sejour=new sejour();
		$sejour->setDebut('2015-02-01');
		$sejour->setFin('2015-03-10');
		$date= new \dateTime("2015-01-01");
		if($this->datelibre($date)){$texte='Oui, période libre, bon pour réservation.';} else {$texte='OCCUPE !';}
		
        return $this->render('VFBookingBundle:Booking:book.html.twig',array('texte' => $texte));
    }
    
    public function menuAction()
    {
        return $this->render('VFBookingBundle:Booking:menu.html.twig');
    }
}
