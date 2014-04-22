<?php

namespace Hostkit\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
    Hostkit\CoreBundle\Entity\Category;

/**
 * @ORM\Entity
 * @ORM\Table(name="statistic_marketing")
 */
class StatisticMarketing
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="integer", length=55)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $value;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $date;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $description;
    
    
    
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param integer $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return integer 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set date
     *
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
}
