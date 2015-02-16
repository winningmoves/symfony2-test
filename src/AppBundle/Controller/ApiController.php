<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    /**
     * @Route("/api/company", name="company")
     */
    public function companyAction(Request $request)
    {
        $response = new Response();

        $response->headers->set('Content-Type', 'text/json');

    	if($request->query->get('company_number')){
    		
    		$duedilService = $this->get('duedil');

	    	$company = $duedilService->getCompany($request->query->get('company_number'));

            $response->setContent($company);

    	}else{

            $responseObject = (object) array(
                "status"=>"failed",
                "reason"=>"No company number provided"
            );

            $response->setContent(json_encode($responseObject));
        }

        return $response;
    }
}
