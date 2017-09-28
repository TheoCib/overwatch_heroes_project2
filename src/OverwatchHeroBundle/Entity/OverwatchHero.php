<?php 

namespace OverwatchHeroBundle\Entity;


class OverwatchHero
{
    private $id;
    private $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getHeroName()
    {
        return $this->name;
    }

}
