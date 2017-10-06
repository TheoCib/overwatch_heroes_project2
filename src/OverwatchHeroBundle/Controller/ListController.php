<?php

namespace OverwatchHeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;
use OverwatchHeroBundle\Repository\HeroCategoryRepository;
use OverwatchHeroBundle\Entity\Category;

class ListController extends Controller
{
    /**
     * @Route("/", name="overwatch_list")
     */
    public function listAction()
    {
        $overwatchCategoryRepository = $this->getDoctrine()->getRepository(Category::class);
        $category = $overwatchCategoryRepository->findAll();
        
        return $this->render('OverwatchHeroBundle:ListHeroes:list.html.twig', [
            'category' => $category,

        ]);
    }
}
