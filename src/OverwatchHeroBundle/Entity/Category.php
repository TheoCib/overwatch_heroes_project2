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
     * @var array
     *
     * @ORM\Column(name="heroIds", type="simple_array")
     */
    private $heroIds;

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
     * Set heroIds
     *
     * @param array $heroIds
     *
     * @return Category
     */
    public function setHeroIds($heroIds)
    {
        $this->heroIds = $heroIds;

        return $this;
    }

    /**
     * Get heroIds
     *
     * @return array
     */
    public function getHeroIds(int $heroIds)
    {
        return $this->heroIds;
    }
}

