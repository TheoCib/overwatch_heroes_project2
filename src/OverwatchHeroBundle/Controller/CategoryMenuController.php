<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\ReviewType;
use CategoryBundle\Entity\Category;

class CategoryMenuController extends Controller
{
    public function categoryMenuAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $categories = $em->getRepository('CategoryBundle:Category')->findAll();
       
        return $this->render(
            'OverwatchHeroBundle:Category:categorydropdown.html.twig', [
            'categories' => $categories,
        ]);
    }
}
