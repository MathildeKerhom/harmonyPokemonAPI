<?php
/**************************************************************************
 * Arenes.php, pokemon Android
 *
 * Copyright 2016
 * Description : 
 * Author(s)   : Harmony
 * Licence     : 
 * Last update : Jun 22, 2016
 *
 **************************************************************************/

namespace Pokemon\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JSON;
use \DateTime;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Arenes
 *
 * @ORM\Table(name="pokemon_arenes")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\ArenesRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Arenes
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
     * @ORM\Column(name="nom", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("nom")
     
     * @var string
     */
    private $nom;

    /**
     * @ORM\OneToOne(targetEntity="Positions")
     * @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("position")
     
     * @var Positions
     */
    private $position;

    /**
     * @ORM\OneToOne(targetEntity="Badges")
     * @ORM\JoinColumn(name="badge_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("badge")
     
     * @var Badges
     */
    private $badge;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return Arenes
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Arenes
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set nom
     *
     * @param string nom
     *
     * @return Arenes
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return Arenes
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set position
     *
     * @param \Pokemon\ApiBundle\Entity\Positions $position
     *
     * @return Arenes
     */
    public function setPosition(\Pokemon\ApiBundle\Entity\Positions $position = null)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return \Pokemon\ApiBundle\Entity\Positions
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * Set badge
     *
     * @param \Pokemon\ApiBundle\Entity\Badges $badge
     *
     * @return Arenes
     */
    public function setBadge(\Pokemon\ApiBundle\Entity\Badges $badge = null)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * Get badge
     *
     * @return \Pokemon\ApiBundle\Entity\Badges
     */
    public function getBadge()
    {
        return $this->badge;
    }
}
