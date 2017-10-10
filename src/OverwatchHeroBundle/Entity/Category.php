<?php

namespace OverwatchHeroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="OverwatchHeroBundle\Repository\CategoryRepository")
 */
class Category
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
     * @var string
     *
     * @ORM\Column(name="categoryName", type="string", length=255, unique=true)
     */
    private $categoryName;

    /**
     * @ORM\OneToMany(targetEntity="Hero", mappedBy="category")
     * @ORM\JoinColumn(name="hero_id", referencedColumnName="id")
     */
    private $heroes;

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
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

      /**
     * Set heroes
     *
     * @param array $heroes
     *
     * @return Category
     */
    public function setHeroes($heroes)
    {
        $this->heroes = $heroes;

        return $this;
    }

    /**
     * Get heroes
     *
     * @return array
     */
    public function getHeroes()
    {
        return $this->heroes;
    }
}