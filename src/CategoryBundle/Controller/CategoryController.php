<?php

namespace CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\OverwatchHeroRepository;
use OverwatchHeroBundle\Entity\Hero;
use UserBundle\Entity\Review;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\ReviewType;


class DetailController extends Controller
{
    /**
     * @Route("/categories/{categoryId}", name="category_detail" )
     */
    public function detailAction(int $categoryId, Request $request)
    {
        $categoryRepository = $this->getDoctrine()->getRepository(Category::class);
        $category = $categoryRepository->find($categoryId);

       
        
        return $this->render('CategoryBundle:Category:detail.html.twig', [
            'category' => $category,
        ]);
    }
}
