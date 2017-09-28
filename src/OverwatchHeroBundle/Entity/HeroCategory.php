<?php

namespace OverwatchHeroBundle\Entity;

class HeroCategory
{
    private $id;
    private $categoryName;
    private $heroes;
    
    public function __construct(array $options)
    {
        $this->id = $options['id'];
        $this->categoryName = $options['categoryName'] ?? 'Aucune categorie';
        $this->heroes = $options['overwatchHeroes'] ?? [];
    }
    
    public function getId(): int
    {
        return $this->id;
    }
    
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }
    
    public function getHeroes(): array
    {
        return $this->heroes;
    }
    
}
