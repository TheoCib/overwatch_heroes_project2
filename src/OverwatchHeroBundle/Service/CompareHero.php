<?php

namespace OverwatchHeroBundle\Service;

use Doctrine\ORM\EntityManager;
use OverwatchHeroBundle\Entity\Hero;

class CompareHero{

	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function compare()
	{
		$heroRepository = $this->em->getRepository(Hero::class);



		$note1 = 8;
		$note2 = 7;

		if($note1>$note2)
		{
			return sprintf("Meilleure note : %d / 10", $note1);
		}
		else if($note2>$note1)
		{
			return sprintf("Meilleure note : %d / 10", $note2);
		}
		else
		{
			return sprintf("Egalité ! %d = %d ", $note1, $note2);
		}

	}

}