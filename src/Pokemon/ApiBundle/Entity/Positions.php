<?php
/**************************************************************************
 * Positions.php, pokemon Android
 *
 * Copyright 2016
 * Description : 
 * Author(s)   : Harmony
 * Licence     : 
 * Last update : May 27, 2016
 *
 **************************************************************************/

namespace Pokemon\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JSON;
use \DateTime;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Positions
 *
 * @ORM\Table(name="pokemon_positions")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\PositionsRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Positions
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("id")
     
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(name="x", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("x")
     
     * @var integer
     */
    private $x;

    /**
     * @ORM\Column(name="y", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("y")
     
     * @var integer
     */
    private $y;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return Positions
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Positions
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set x
     *
     * @param integer x
     *
     * @return Positions
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return Positions
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set y
     *
     * @param integer y
     *
     * @return Positions
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return Positions
     */
    public function getY()
    {
        return $this->y;
    }
}
