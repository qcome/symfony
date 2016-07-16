<?php

namespace OCPlatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCPlatBundle:Default:index.html.twig');
    }
}
