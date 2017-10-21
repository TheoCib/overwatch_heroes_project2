<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;
use OverwatchHeroBundle\Repository\HeroCategoryRepository;
use CategoryBundle\Entity\Category;
use OverwatchHeroBundle\Entity\Hero;

class ListController extends Controller
{
    /**
     * @Route("/", name="overwatch_list")
     */
    public function listAction()
    {
        $overwatchCategoryRepository = $this->getDoctrine()->getRepository(Category::class);
        $categories = $overwatchCategoryRepository->findAll();

        $overwatchHeroRepository = $this->getDoctrine()->getRepository(Hero::class);
        $heroes = $overwatchHeroRepository->findAll();
        
        return $this->render('OverwatchHeroBundle:ListHeroes:list.html.twig', [
            'categories' => $categories,
            'heroes' => $heroes,
        ]);
    }
}
