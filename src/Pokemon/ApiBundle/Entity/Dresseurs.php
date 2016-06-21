<?php
/**************************************************************************
 * Dresseurs.php, pokemon Android
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
 * Dresseurs
 *
 * @ORM\Table(name="pokemon_dresseurs")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\DresseursRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Dresseurs
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
     * @ORM\OneToOne(targetEntity="Npc")
     * @ORM\JoinColumn(name="npc_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("npc")
     
     * @var Npc
     */
    private $npc;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return Dresseurs
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Dresseurs
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
     * @return Dresseurs
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return Dresseurs
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set npc
     *
     * @param \Pokemon\ApiBundle\Entity\Npc $npc
     *
     * @return Dresseurs
     */
    public function setNpc(\Pokemon\ApiBundle\Entity\Npc $npc = null)
    {
        $this->npc = $npc;

        return $this;
    }

    /**
     * Get npc
     *
     * @return \Pokemon\ApiBundle\Entity\Npc
     */
    public function getNpc()
    {
        return $this->npc;
    }
}
