<?php

namespace EV\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EVHomeBundle:Default:index.html.twig');
    }
}
