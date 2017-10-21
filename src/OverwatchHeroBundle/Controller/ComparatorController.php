<?php
namespace OverwatchHeroBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OverwatchHeroBundle\Repository\HeroRepository;
use OverwatchHeroBundle\Entity\Hero;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
* @Route("/versus")
*/
class ComparatorController extends Controller
{
    /**
     * @Route("/", name="comparator")
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
            'heroes' => $heroes,
        ]);
    }
    
    /**
     * Lists all hero entities.
     *
     * @Route("/{selectedHeroId}/{heroId}", name="comparator_from_detail")
     * @Method("GET")
     */
    public function newAction(int $selectedHeroId, int $heroId)
    {
        $heroRepository = $this->getDoctrine()->getRepository(Hero::class);
        $heroes = $heroRepository->findAll();

        $currentComparedHero = $heroRepository->find($heroId);
        $selectedComparedHero = $heroRepository->find($selectedHeroId);

        $heroCount = count($heroes);

        if( $selectedHeroId < 0 || $selectedHeroId > $heroCount || $heroId < 0 || $heroId > $heroCount)
        {
            throw $this->createNotFoundException('OOPS, looks like heroes went wrong !');
        }

        return $this->render('OverwatchHeroBundle:Comparator:comparatorNotRandom.html.twig', [
            'allHeroes' => $heroes,
            'currentComparedHero' => $currentComparedHero,
            'selectedComparedHerol' => $selectedComparedHero,
        ]);
    }
}