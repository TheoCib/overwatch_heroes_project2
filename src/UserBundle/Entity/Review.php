<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\ReviewRepository")
 */
class Review
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="review")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var Hero
     *
     * @ORM\ManyToOne(targetEntity="OverwatchHeroBundle\Entity\Hero", inversedBy="review")
     * @ORM\JoinColumn(name="hero_id", referencedColumnName="id")
     */
    private $hero;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 1,
     *      max = 10,
     *      minMessage = "La note doit être comprise entre 1 et 10",
     *      maxMessage = "La note doit être comprise entre 1 et 10"
     * )
     */
    private $rate;

    /**
     * @var text
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return Review
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Review
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
    
     /**
     * Set user
     *
     * @param User $user
     *
     * @return Review
     */
     public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set hero
     *
     * @param Hero $hero
     *
     * @return Review
     */
     public function setHero($hero)
    {
        $this->hero = $hero;

        return $this;
    }

    /**
     * Get hero
     *
     * @return string
     */
    public function getHero()
    {
        return $this->hero;
    }

}