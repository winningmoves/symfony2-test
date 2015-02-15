<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\UserBundle\Controller\SecurityController;

class MySecurityController extends SecurityController
{
    //Override route
    /**
     * @Route("/login")
     * @Template()
     */
    public function loginAction(Request $request)
    {   
        return parent::loginAction($request);  
    }

    /**
     * Have overridden this function to select our login view.
     *
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderLogin(array $data)
    {
        $data['title'] = 'Login';

        return $this->render('AppBundle:MySecurity:login.html.twig', $data);
    }
}
