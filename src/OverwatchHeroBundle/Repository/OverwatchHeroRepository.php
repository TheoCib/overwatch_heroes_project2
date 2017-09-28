<?php 

namespace OverwatchHeroBundle\Repository;

use OverwatchHeroBundle\Entity\OverwatchHero;

class OverwatchHeroRepository
{
    public function findAllOverwatchHeroes(): array
    {
        $overwatchHeroes = [
            'Hanzo',
            'D.VA',
            'Doom Fist',
            'Sombra',
        ];
        
        return $overwatchHeroes;
    }


/*
    public function findAllOverwatchHeroesTestJ2(): array
    {
        $overwatchHeroesTestJ2 = [
            new OverwatchHero("Hanzo", "Distance"),
            new OverwatchHero("D.VA", "Distance"),
            new OverwatchHero("DoomFist", "CàC"),
            new OverwatchHero("Sombra", "Distance"),
            new OverwatchHero("Winston", "CàC"),
            ];

            return $overwatchHeroesTestJ2;
    }
    public function selectRandomHero()
    {
        $overwatchHeroesTabTestRand = $this->findAllOverwatchHeroesTestJ2();
        $heroesTableLength = count($overwatchHeroesTabTestRand)-1;
        $heroSelected = $overwatchHeroesTabTestRand[mt_rand(0, $heroesTableLength)];
        return $heroSelected;
    }*/

    public function findById(int $overwatchHeroId): ?OverwatchHero
    {
        $heroCategoryRepository = new HeroCategoryRepository();
        $categories = $heroCategoryRepository->findAllCategories();
        
        foreach ($categories as $currentCategory) {
            foreach ($currentCategory->getHeroes() as $currentHero) {
                if($currentHero->getId() === $overwatchHeroId){
                    return $currentHero;
                }
            }
        }

        return null;

    }
}

