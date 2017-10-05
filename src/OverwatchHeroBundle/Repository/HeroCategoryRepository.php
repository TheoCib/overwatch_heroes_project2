<?php

namespace OverwatchHeroBundle\Repository;

use Symfony\Component\Finder\Finder;
use OverwatchHeroBundle\Entity\HeroCategory;
use OverwatchHeroBundle\Entity\OverwatchHero;

class HeroCategoryRepository
{
    public function findAllCategories(): array
    {
        $finder = new Finder;
        $finder->files()->in(sprintf('%s/../Resources/categories', __DIR__));
        
        $categories = [];
        foreach ($finder as $file) {
            $filePath = $file->getRealPath();
            $data = json_decode(file_get_contents($filePath), true);
            
            $data['overwatchHeroes'] = array_map(function(array $overwatchHeroData) {
                return new OverwatchHero($overwatchHeroData["id"],$overwatchHeroData["heroname"]);
            }, $data['overwatchHeroes']);
            
            $categories[] = new HeroCategory($data);
        }
        
        return $categories;
    }
}
