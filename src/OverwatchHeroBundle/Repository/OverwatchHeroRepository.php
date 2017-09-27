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
}
