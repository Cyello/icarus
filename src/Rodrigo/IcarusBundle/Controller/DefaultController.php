<?php

namespace Rodrigo\IcarusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RodrigoIcarusBundle:Default:index.html.twig', array('name' => $name));
    }
}
