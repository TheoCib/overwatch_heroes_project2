<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;

class DetailController extends Controller
{
    /**
     * @Route("/overwatch")
     */
    public function detailAction()
    {
        $overwatchHeroRepository = new OverwatchHeroRepository;
        $overwatchHeroes = $overwatchHeroRepository->findAllOverwatchHeroes();
        
        return $this->render('OverwatchHeroBundle:OverwatchHero:detail.html.twig', [
            'overwatchHeroes' => $overwatchHeroes,
        ]);
    }
}
