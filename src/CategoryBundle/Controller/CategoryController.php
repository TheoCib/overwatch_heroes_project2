<?php

namespace CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;
use OverwatchHeroBundle\Entity\Hero;
use UserBundle\Entity\Review;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\ReviewType;
use CategoryBundle\Entity\Category;

class CategoryController extends Controller
{
    /**
     * @Route("/categories/{categoryId}", name="category_detail" )
     */
    public function categoryAction(int $categoryId, Request $request)
    {
        $categoryRepository = $this->getDoctrine()->getRepository(Category::class);
        $category = $categoryRepository->find($categoryId);

        
        return $this->render('CategoryBundle:Category:detailCategory.html.twig', [
            'category' => $category,
        ]);
    }
}
