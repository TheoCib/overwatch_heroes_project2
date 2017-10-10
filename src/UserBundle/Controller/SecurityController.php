<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
	// get the login error if there is one
	$error = $authUtils->getLastAuthenticationError();

	// last username entered by the user
	$lastUsername = $authUtils->getLastUsername();

	return $this->render('UserBundle:Login:login.html.twig', array(
		'last_username' => $lastUsername,
	 	'error' => $error,
	));	
    }
}