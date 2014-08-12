<?php

namespace Sifast\PfeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SifastPfeBundle:Default:index.html.twig', array('name' => $name));
    }
}
