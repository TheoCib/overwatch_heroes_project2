<?php 

namespace OverwatchHeroBundle\Repository;

use OverwatchHeroBundle\Entity\OverwatchHero;

class OverwatchHeroRepository
{
    
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

