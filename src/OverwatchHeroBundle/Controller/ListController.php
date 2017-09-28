<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;
use OverwatchHeroBundle\Repository\HeroCategoryRepository;


class ListController extends Controller
{
    /**
     * @Route("/", name="overwatch_list")
     */
    public function listAction()
    {
        $overwatchHeroRepository = new HeroCategoryRepository;
        $categories = $overwatchHeroRepository->findAllCategories();
        
        return $this->render('OverwatchHeroBundle:ListHeroes:list.html.twig', [
            'categories' => $categories,

        ]);
    }
}
