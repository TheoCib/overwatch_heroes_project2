<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;
use OverwatchHeroBundle\Entity\Hero;


class DetailController extends Controller
{
    /**
     * @Route("/{heroId}", name="overwatch_detail" )
     */
    public function detailAction($heroId)
    {
        //$overwatchHeroRepository = new OverwatchHeroRepository();
        $overwatchHeroRepository = $this->getDoctrine()->getRepository(Hero::class);
        $hero = $overwatchHeroRepository->find($heroId);
        
        return $this->render('OverwatchHeroBundle:Hero:detail.html.twig', [
            'hero' => $hero,
        ]);
    }
}
