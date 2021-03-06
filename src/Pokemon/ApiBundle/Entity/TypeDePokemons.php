<?php
/**************************************************************************
 * TypeDePokemons.php, pokemon Android
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
 * TypeDePokemons
 *
 * @ORM\Table(name="pokemon_typeDePokemons")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\TypeDePokemonsRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class TypeDePokemons
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
     * @ORM\Column(name="attaque", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque")
     
     * @var integer
     */
    private $attaque;

    /**
     * @ORM\Column(name="attaque_spe", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque_spe")
     
     * @var integer
     */
    private $attaque_spe;

    /**
     * @ORM\Column(name="defence", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("defence")
     
     * @var integer
     */
    private $defence;

    /**
     * @ORM\Column(name="defence_spe", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("defence_spe")
     
     * @var integer
     */
    private $defence_spe;

    /**
     * @ORM\Column(name="vitesse", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("vitesse")
     
     * @var integer
     */
    private $vitesse;

    /**
     * @ORM\Column(name="pv", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pv")
     
     * @var integer
     */
    private $pv;

    /**
     * @ORM\OneToMany(targetEntity="Types", mappedBy="typeDePokemonstypesInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("types")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $types;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return TypeDePokemons
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return TypeDePokemons
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
     * @return TypeDePokemons
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return TypeDePokemons
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set attaque
     *
     * @param integer attaque
     *
     * @return TypeDePokemons
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get attaque
     *
     * @return TypeDePokemons
     */
    public function getAttaque()
    {
        return $this->attaque;
    }
    /**
     * Set attaque_spe
     *
     * @param integer attaque_spe
     *
     * @return TypeDePokemons
     */
    public function setAttaque_spe($attaque_spe)
    {
        $this->attaque_spe = $attaque_spe;

        return $this;
    }

    /**
     * Get attaque_spe
     *
     * @return TypeDePokemons
     */
    public function getAttaque_spe()
    {
        return $this->attaque_spe;
    }
    /**
     * Set defence
     *
     * @param integer defence
     *
     * @return TypeDePokemons
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;

        return $this;
    }

    /**
     * Get defence
     *
     * @return TypeDePokemons
     */
    public function getDefence()
    {
        return $this->defence;
    }
    /**
     * Set defence_spe
     *
     * @param integer defence_spe
     *
     * @return TypeDePokemons
     */
    public function setDefence_spe($defence_spe)
    {
        $this->defence_spe = $defence_spe;

        return $this;
    }

    /**
     * Get defence_spe
     *
     * @return TypeDePokemons
     */
    public function getDefence_spe()
    {
        return $this->defence_spe;
    }
    /**
     * Set vitesse
     *
     * @param integer vitesse
     *
     * @return TypeDePokemons
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get vitesse
     *
     * @return TypeDePokemons
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }
    /**
     * Set pv
     *
     * @param integer pv
     *
     * @return TypeDePokemons
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get pv
     *
     * @return TypeDePokemons
     */
    public function getPv()
    {
        return $this->pv;
    }
    /**
     * Add types
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\Types $types
     *
     * @return TypeDePokemons
     */
    public function addTypes(\Pokemon\ApiBundle\Entity\Types $types)
    {
        $this->typess[] = $types;

        return $this;
    }

    /**
     * Remove types
     *
     * @param \Pokemon\ApiBundle\Entity\Types $types
     */
    public function removeTypes(\Pokemon\ApiBundle\Entity\Types $types)
    {
        $this->typess->removeElement($types);
    }

    /**
     * Get typess
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypes()
    {
        return $this->types;
    }
}
