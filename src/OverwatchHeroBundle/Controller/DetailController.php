<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;


class DetailController extends Controller
{
    /**
     * @Route("/overwatch/{overwatchHeroId}", name="overwatch_detail" )
     */
    public function detailAction($overwatchHeroId)
    {
        $overwatchHeroRepository = new OverwatchHeroRepository();
        $hero = $overwatchHeroRepository->findById($overwatchHeroId);
        
        return $this->render('OverwatchHeroBundle:Hero:detail.html.twig', [
            'hero' => $hero,
        ]);
    }
}
