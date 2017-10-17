<?php
namespace ComparatorController\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\TeamRepository;
use OverwatchHeroBundle\Entity\Hero;
class RandomTeamController extends Controller
{
    /**
     * @Route("/versus", name="Comparator")
     */
    public function randomAction()
    {
        $heroRepository = $this->getDoctrine()->getRepository(Hero::class);
        $heroes = $heroRepository->findAll();
        $hero = $heroes[mt_rand(0, 24)];
        $hero2 = $heroes[mt_rand(0, 24)];
        while ($hero === $hero2){
            $hero2 = $heroes[mt_rand(0, 24)];
        }
        return $this->redirectToRoute('detail_hero', [
            'heroId' => $hero->getId(),
            'heroId2'=> $hero2->getId(),
        ]);
    }
}