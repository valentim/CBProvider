<?php

namespace CricketBrasil\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CricketBrasilSiteBundle:Default:index.html.twig', array('name' => 'Cricket'));
    }
}
