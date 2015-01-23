<?php

namespace CricketBrasil\SearchBundle\Controller;

use CricketBrasil\SiteBundle\Form\SearchType;
use CricketBrasil\SearchBundle\Model\ProviderSearch;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/search/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * @Route("/search/set/{user}")
     * @Template()
     */
    public function setAction($user)
    {        
        
        return array('user' => $user);
    }
    
    /**
    * @Route("/provider/search/", name="site_search")
    * @Template
    */
    public function searchAction(Request $request)  
    {
        $providerSearch = new ProviderSearch();

        $providerSearchForm = $this->createFormBuilder($providerSearch)
            ->add('name', 'text', array("label" => "Nome"))
            ->add('email', 'text', array("label" => "Email"))
            ->add('phone', 'text', array("label" => "Telefone"))
            ->add('dateFrom', 'date' , array("label" => "De: "))
            ->add('dateTo', 'date', array("label" => "Até: "))
            ->add('search', 'submit', array('label' => 'Buscar'))
            ->getForm();
            
        $providerSearchForm->handleRequest($request);
        $providerSearch = $providerSearchForm->getData();
        
        /*$results = array();
        
        return $this->render('CricketBrasilSiteBundle:Provider:search.html.twig',array(
            'results' => $results,
            'SearchForm' => $providerSearchForm->createView(),
        ));*/
    
    
        $elasticaManager = $this->container->get('fos_elastica.manager');
        
        $results = $elasticaManager->getRepository('CricketBrasil\SearchBundle\Entity\Provider');
       

        return $this->render('CricketBrasilSearchBundle:Provider:search.html.twig',array(
            'results' => $results,
            'SearchForm' => $providerSearchForm->createView(),
        ));
    }
    
    
    
}
