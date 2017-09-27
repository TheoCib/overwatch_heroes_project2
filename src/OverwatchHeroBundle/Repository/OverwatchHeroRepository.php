<?php 

namespace OverwatchHeroBundle\Repository;

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
    }
}

class OverwatchHero
{
    private $name;
    private $fightingType;

    public function __construct(string $name, string $fightingType)
    {
        $this->name = $name;
        $this->fightingType = $fightingType;
    }

    public function getHeroName()
    {
        return $this->name;
    }
    public function showHeroDetails()
    {
        echo sprintf(' Héros : %s Style de combat : %s ', $this->name, $this->fightingType);
    }
    public function getHeroFightingType()
    {
        return $this->fightingType;
    }
}
