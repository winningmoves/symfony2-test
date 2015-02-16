<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
    	$user = $this->getUser();

    	$data = array(
    		"title"=>"Home",
    		//"user"=>$user
    	);

    	$duedilService = $this->get('duedil');

        return $this->render('AppBundle:App:index.html.twig', $data);
    }
}
