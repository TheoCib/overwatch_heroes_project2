<?php

namespace OverwatchHeroBundle\Controller;

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
use CategoryBundle\Entity\Category;

class DetailController extends Controller
{
    /**
     * @Route("/{heroId}", name="overwatch_detail" )
     */
    public function detailAction(int $heroId, Request $request)
    {
        $overwatchHeroRepository = $this->getDoctrine()->getRepository(Hero::class);
        $hero = $overwatchHeroRepository->find($heroId);

         $user = $this->getUser();
        if ($user) {
             $reviewForm = $this->createForm(ReviewType::class, new Review());
            
            $reviewForm->handleRequest($request);
            if ($reviewForm->isSubmitted() && $reviewForm->isValid()) {
                $review = $reviewForm->getData();
                
                $review->setUser($this->getUser());
                $review->setHero($hero);
                $em = $this->getDoctrine()->getManager();
                $em->persist($review);
                $em->flush();
                return $this->redirectToRoute('overwatch_detail', [
                    'heroId' => $heroId,
                ]);
            }
        }

        $compareHero = $this->container->get('overwatch_hero.compare_hero');
        
        return $this->render('OverwatchHeroBundle:Hero:detail.html.twig', [
            'hero' => $hero,
            'review_form' => $user ? $reviewForm->createView() : null,
            'compare_hero' => $compareHero->compare(),
        ]);
    }

      private function getReviewForm()
    {
        $review = new Review();
        $form = $this->createFormBuilder($review)
            ->add('rate', IntegerType::class, ['label' => "Note sur 10"])
            ->add('comment', TextareaType::class, [
                'label' => "Commentaire",
            ])
            ->add('save', SubmitType::class, array('label' => "Noter le Héros"))
            ->getForm()
        ;
        
        return $form;
    }
}
