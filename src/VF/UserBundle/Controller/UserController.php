<?php

namespace VF\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function menuAction()
    {
        return $this->render('VFUserBundle:User:menu.html.twig');
    }

	public function loginAction()
    {
        return $this->render('VFUserBundle:User:login.html.twig');
    }
	
	public function changePasswordAction()
    {
        return $this->render('VFUserBundle:User:changePassword.html.twig');
    }
}
