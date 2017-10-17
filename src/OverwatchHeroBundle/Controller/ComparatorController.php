<?php
namespace OverwatchHeroBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\HeroRepository;
use OverwatchHeroBundle\Entity\Hero;

class ComparatorController extends Controller
{
    /**
     * @Route("/versus", name="comparator")
     */
    public function randomAction()
    {
        $heroRepository = $this->getDoctrine()->getRepository(Hero::class);
        $heroes = $heroRepository->findAll();
        $hero1 = $heroes[mt_rand(0, 24)];
        $hero2 = $heroes[mt_rand(0, 24)];
        while ($hero1 === $hero2){
            $hero2 = $heroes[mt_rand(0, 24)];
        }
        return $this->render('OverwatchHeroBundle:Comparator:comparator.html.twig', [
            'hero1' => $hero1,
            'hero2' => $hero2,
        ]);
    }