<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;

class DetailController extends Controller
{
    /**
     * @Route("/overwatch/detail")
     */
    public function detailAction()
    {
        $overwatchHeroRepository = new OverwatchHeroRepository;
        $overwatchHeroesTestJ2 = $overwatchHeroRepository->findAllOverwatchHeroesTestJ2();
         $heroSelectedReadyForTwig = $overwatchHeroRepository->selectRandomHero();
        
        return $this->render('OverwatchHeroBundle:OverwatchHero:detail.html.twig', [
            'overwatchHeroesTestJ2' => $overwatchHeroesTestJ2,
            'heroSelectedReadyForTwig' => $heroSelectedReadyForTwig,
        ]);
    }
}
