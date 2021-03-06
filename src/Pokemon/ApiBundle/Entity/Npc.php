<?php
/**************************************************************************
 * Npc.php, pokemon Android
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
 * Npc
 *
 * @ORM\Table(name="pokemon_npc")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\NpcRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Npc
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
     * @ORM\Column(name="profession", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("profession")
     
     * @var string
     */
    private $profession;

    /**
     * @ORM\Column(name="texte", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("texte")
     
     * @var string
     */
    private $texte;

    /**
     * @ORM\OneToMany(targetEntity="Objets", mappedBy="npcobjetsInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("objets")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $objets;

    /**
     * @ORM\OneToMany(targetEntity="Pokemons", mappedBy="npcpokemonsInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokemons")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pokemons;

    /**
     * @ORM\ManyToMany(targetEntity="Badges")
     * @ORM\JoinTable(name="npctoBadges",
     *      joinColumns={@ORM\JoinColumn(name="npcInternalId_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="badges_id", referencedColumnName="id")}
     * )
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("badges")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $badges;

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
     * Set id
     *
     * @param integer id
     *
     * @return Npc
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Npc
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
     * @return Npc
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return Npc
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set profession
     *
     * @param string profession
     *
     * @return Npc
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return Npc
     */
    public function getProfession()
    {
        return $this->profession;
    }
    /**
     * Set texte
     *
     * @param string texte
     *
     * @return Npc
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return Npc
     */
    public function getTexte()
    {
        return $this->texte;
    }
    /**
     * Add objets
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\Objets $objets
     *
     * @return Npc
     */
    public function addObjets(\Pokemon\ApiBundle\Entity\Objets $objets)
    {
        $this->objetss[] = $objets;

        return $this;
    }

    /**
     * Remove objets
     *
     * @param \Pokemon\ApiBundle\Entity\Objets $objets
     */
    public function removeObjets(\Pokemon\ApiBundle\Entity\Objets $objets)
    {
        $this->objetss->removeElement($objets);
    }

    /**
     * Get objetss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObjets()
    {
        return $this->objets;
    }
    /**
     * Add pokemons
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\Pokemons $pokemons
     *
     * @return Npc
     */
    public function addPokemons(\Pokemon\ApiBundle\Entity\Pokemons $pokemons)
    {
        $this->pokemonss[] = $pokemons;

        return $this;
    }

    /**
     * Remove pokemons
     *
     * @param \Pokemon\ApiBundle\Entity\Pokemons $pokemons
     */
    public function removePokemons(\Pokemon\ApiBundle\Entity\Pokemons $pokemons)
    {
        $this->pokemonss->removeElement($pokemons);
    }

    /**
     * Get pokemonss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPokemons()
    {
        return $this->pokemons;
    }
    /**
     * Add badges
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\Badges $badges
     *
     * @return Npc
     */
    public function addBadges(\Pokemon\ApiBundle\Entity\Badges $badges)
    {
        $this->badgess[] = $badges;

        return $this;
    }

    /**
     * Remove badges
     *
     * @param \Pokemon\ApiBundle\Entity\Badges $badges
     */
    public function removeBadges(\Pokemon\ApiBundle\Entity\Badges $badges)
    {
        $this->badgess->removeElement($badges);
    }

    /**
     * Get badgess
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBadges()
    {
        return $this->badges;
    }
    /**
     * Set position
     *
     * @param \Pokemon\ApiBundle\Entity\Positions $position
     *
     * @return Npc
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
}
