<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FirstController extends Controller
{
    /**
     * @Route("/first")
     * @Template()
     */
    public function IndexAction()
    {
        return array(
            // ...
        );    
    }

}
