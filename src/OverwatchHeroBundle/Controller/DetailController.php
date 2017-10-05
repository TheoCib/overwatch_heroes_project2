<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;
use OverwatchHeroBundle\Entity\Hero;


class DetailController extends Controller
{
    /**
     * @Route("/{overwatchHeroId}", name="overwatch_detail" )
     */
    public function detailAction($overwatchHeroId)
    {
        //$overwatchHeroRepository = new OverwatchHeroRepository();
        $overwatchHeroRepository = $this->getDoctrine()->getRepository(Hero::class);
        $hero = $overwatchHeroRepository->find($overwatchHeroId);
        
        return $this->render('OverwatchHeroBundle:Hero:detail.html.twig', [
            'hero' => $hero,
        ]);
    }
}
