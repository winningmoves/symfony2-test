<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LoginController extends Controller
{
    /**
     * @Route("/myOTHERlogin")
     * @Template()
     */
    public function indexAction()
    {   
    	return array(
            "title"=>"Welcome"
        );    
    }

}
