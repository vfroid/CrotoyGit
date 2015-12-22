<?php

namespace VF\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VFCoreBundle:Default:index.html.twig');
    }
}
