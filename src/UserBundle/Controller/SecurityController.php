<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Login:login.html.twig');
    }
}