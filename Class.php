<?php

class HeroOverwatch
{
	private $name;
	private $type;
	
	public function __construct(string $name,string $type)
	{
		$this->name = $name;
		$this->type = $type;
	}
}

$rein = new HeroOverwatch("Rein", "Tank");
var_dump($rein);



class User
{
	private $id;
	private $name;
	
	public function __construct(int $id, string $name)
	{
		$this->id = $id;
		$this->name = $name;
	}
}

$monsieur = new User(1234,"Bernard");
var_dump($monsieur);



class Review
{
	private $rate;
	private $comment;

	public function __construct(int $rate, string $comment)
	{
		$this->rate = $rate;
		$this->comment = $comment;
	}

	public function getRate()
	{
		print($this->rate."/10 ");
	}

	public function getComment()
	{
		print($this->comment."\n");
	}
}

$item1 = new Review(5, "Mei est trop puissante");
$item2 = new Review(10, "D.va est balance sur la nouvelle maj");
$item3 = new Review(9, "Junkrat est devenue très fort en ranked");

$reviews = [
	$item1,
	$item2,
	$item3,
];

foreach ($reviews as $currentReview) {
	$currentReview->getRate();
	$currentReview->getComment();
}




