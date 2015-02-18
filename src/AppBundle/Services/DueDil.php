<?php
namespace AppBundle\Services;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;

class DueDil
{
    protected $_api_key;
    protected $_client;

    public function __construct($duedil_api_key)
    {
        $this->_api_key = $duedil_api_key;

        $this->_client = new Client();               
    }

    public function search($searchString)
    {
        $url = "http://api.duedil.com/open/search";

        try{

            $response = $this->_client->get($url, array(

                'query'=>array(
                    'api_key' => $this->_api_key, 
                    'q' => $searchString
                )

            ));
            
            $json = $response->json();

        }catch(RequestException $re)
        {   
            if ($re->hasResponse()) {

                $response = $re->getResponse();

                if($response->getStatusCode() == 404){

                    //return an empty array as there are no results
                    return false;

                }else{

                    throw $re;
                }
            }
        }

        $companies = $json["response"]["data"];

        //?q={company_name}&api_key={api_key}
        return $companies;
    }

    public function getCompany($companyNumber)
    {
        $url = "http://api.duedil.com/open/uk/company/" . $companyNumber;

        //{company_number}?api_key={api_key}

        $json = $this->_client->get($url, array(

            'query'=>array(
                'api_key' => $this->_api_key                
            )

        ))->json();

        $company = (object) $json;

        //?q={company_name}&api_key={api_key}
        return $company;
    }
}
