<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AppController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
    	$user = $this->getUser();

        $usersCompanies = array();

    	$data = array(
    		"title"=>"Home",
    		"companies"=>array(),
    		"your_companies"=>array()
    	);

        if($user){

            $data["your_companies"] = $user->getCompanies();
        }

    	if($request->request->get('search')){
    		
    		$duedilService = $this->get('duedil');

	    	$companies = $duedilService->search( $request->request->get('search') );

	    	$data['companies'] = $companies;
    	}

        return $this->render('AppBundle:App:index.html.twig', $data);
    }
}
