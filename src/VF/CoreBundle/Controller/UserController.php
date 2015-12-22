<?php

namespace VF\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function menuAction()
    {
        return $this->render('VFCoreBundle:User:menu.html.twig');
    }
}
