<?php

namespace CircuitBakery\TwitterQuotesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CircuitBakeryTwitterQuotesBundle:Default:index.html.twig');
    }
}
