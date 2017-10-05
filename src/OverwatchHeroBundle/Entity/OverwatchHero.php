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

     public function getPicture()
    {
        $heroname = strtoupper($this->name);
        $heroname = str_replace(' ', '_', $name);
        
        return sprintf(
            'bundles/hero/img/%s_%s.png',
            $heroname,
            $this->heroname
        );
    }

}
