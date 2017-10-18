<?php

namespace OverwatchHeroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hero
 *
 * @ORM\Table(name="hero")
 * @ORM\Entity(repositoryClass="OverwatchHeroBundle\Repository\HeroRepository")
 */
class Hero
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="CategoryBundle\Entity\Category", inversedBy="heroes")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
    * @var array
    *
    *@ORM\OneToMany(targetEntity="UserBundle\Entity\Review", mappedBy="hero")
    *@ORM\JoinColumn(name="review_id", referencedColumnName="id")
    */
    private $reviews;

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
     * Set name
     *
     * @param string $name
     *
     * @return Hero
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

     /**
     * Set category
     *
     * @param string $category
     *
     * @return Hero
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get Category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
      * Set reviews
      *
      * @param Review $reviews
      *
      * @return Hero
      */
     public function setReviews($reviews)
     {
         $this->reviews = $reviews;
 
         return $this;
     }

    /**
     * Get Reviews
     *
     * @return array
     */
    public function getReviews()
    {
        return $this->reviews;
    }

     public function getAverageRating(): float
     {
         $ratings = [];
         foreach ($this->getReviews() as $review) {
             $ratings[] = $review->getRate();
         }
         
         if (count($ratings) === 0) {
             return 0;
         }
         
         return round(array_sum($ratings) / count($ratings),2);
     }

     /**
     * Set description
     *
     * @param string $description
     *
     * @return Hero
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

     public function getImage()
    {
        $name = strtoupper($this->name);
        $name = str_replace(' ', '_', $name);
        
        return sprintf(
            'public/%s.png',
            $name
        );
    }

     public function getCapacity()
    {
        $name = strtoupper($this->name);
        $name = str_replace(' ', '_', $name);
        
        return sprintf(
            'public/%scapacity.png',
            $name
        );
    }
}

