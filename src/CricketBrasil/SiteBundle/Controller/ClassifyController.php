<?php

namespace CricketBrasil\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Classify controller.
 *
 * @Route("/classificar")
 */
class ClassifyController extends Controller
{
    /**
     * Lists all Job entities.
     *
     * @Route("/", name="job_done")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CricketBrasilSiteBundle:Job')->findAll();

        return $this->render('CricketBrasilSiteBundle:Classify:index.html.twig', array('jobs' => $entities));
    }
}
