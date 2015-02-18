<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Company;

class ApiController extends Controller
{
    /**
     * Get company from company number.
     * 
     * @Route("/api/company", name="company")
     */
    public function companyAction(Request $request)
    {
        $response = new Response();

        $response->headers->set('Content-Type', 'text/json');

    	if($request->query->get('company_number')){
    		
    		$duedilService = $this->get('duedil');

	    	$company = $duedilService->getCompany($request->query->get('company_number'));

            $response->setContent(json_encode($company));

    	}else{

            $responseObject = (object) array(
                "status"=>"failed",
                "reason"=>"No company number provided"
            );

            $response->setContent(json_encode($responseObject));
        }

        return $response;
    }

    /**
     * Saves the company for user to view later on.
     * 
     * @Route("/api/company/save", name="companySave")
     */
    public function companySaveAction(Request $request)
    {
        $response = new Response();

        $response->headers->set('Content-Type', 'text/json');

        if($request->query->get('company_number')){
            
            $user = $this->getUser();

            $duedilService = $this->get('duedil');

            $company = $duedilService->getCompany($request->query->get('company_number'));

            $companyEntity = new Company();
            $companyEntity->setName($company->name_formatted);
            $companyEntity->setCompanyNumber($company->company_number);
            $companyEntity->setUser($user);
            $companyEntity->setJson(json_encode($company));

            $em = $this->getDoctrine()->getManager();
            $em->persist($companyEntity);
            $em->flush();

            $responseObject = (object) array(
                "status"=>"success",
                "id"=>$companyEntity->getId()
            );

            $response->setContent(json_encode($responseObject));

        }else{

            $responseObject = (object) array(
                "status"=>"failed",
                "reason"=>"No company number provided"
            );

            $response->setContent(json_encode($responseObject));
        }

        return $response;
    }

    /**
     * Get companies for current user.
     * 
     * @Route("/api/user/companies", name="userCompanies")
     */
    public function userCompaniesAction(Request $request)
    {
        $user = $this->getUser();

        $response = new Response();

        $response->headers->set('Content-Type', 'text/json');

        $companies = $user->getCompanies();
            
        $array4Json = array();
        
        foreach($companies as $c){

            $array4Json[] = (Object) array(
                "name"=>$c->getName(),
                "company_number"=>$c->getCompanyNumber(),
                "user_id"=>$c->getUserId(),
                "json"=>json_decode($c->getJson()),
            );                 
        }

        $responseObject = (Object) array(
            "status"=>"success",
            "results"=>$array4Json
        );

        $response->setContent(json_encode($responseObject));

        return $response;
    }
}
