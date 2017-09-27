<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;

class ListController extends Controller
{
    /**
     * @Route("/overwatch/list")
     */
    public function listAction()
    {
        $overwatchHeroRepository = new OverwatchHeroRepository;
        $overwatchHeroes = $overwatchHeroRepository->findAllOverwatchHeroes();
        
        return $this->render('OverwatchHeroBundle:OverwatchHero:list.html.twig', [
            'overwatchHeroes' => $overwatchHeroes,
        ]);
    }
}
