<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;
use OverwatchHeroBundle\Entity\Category;


class DetailController extends Controller
{
    /**
     * @Route("/{overwatchHeroId}", name="overwatch_detail" )
     */
    public function detailAction($overwatchHeroId)
    {
        //$overwatchHeroRepository = new OverwatchHeroRepository();
        $overwatchHeroRepository = $this->getDoctrine()->getRepository(Category::class);
        $hero = $overwatchHeroRepository->findAll();
        
        return $this->render('OverwatchHeroBundle:Hero:detail.html.twig', [
            'hero' => $hero,
        ]);
    }
}
