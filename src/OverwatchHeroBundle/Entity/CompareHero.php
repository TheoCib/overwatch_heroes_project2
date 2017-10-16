<?php

namespace OverwatchHeroBundle\Entity;

class CompareHero{

	public function compare()
	{
		$note1 = 5;
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