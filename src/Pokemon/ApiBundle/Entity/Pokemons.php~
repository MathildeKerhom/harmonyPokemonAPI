<?php
/**************************************************************************
 * Pokemons.php, pokemon Android
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
 * Pokemons
 *
 * @ORM\Table(name="pokemon_pokemons")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\PokemonsRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Pokemons
{
    /**
     * @ORM\ManyToOne(targetEntity="Npc", inversedBy="pokemons")
     * @ORM\JoinColumn(name="NpcpokemonsInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("npcpokemonsInternal")
     
     * @var Npc
     */
    private $npcpokemonsInternal;

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
     * @ORM\Column(name="surnom", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("surnom")
     
     * @var string
     */
    private $surnom;

    /**
     * @ORM\Column(name="niveau", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("niveau")
     
     * @var integer
     */
    private $niveau;

    /**
     * @ORM\Column(name="capture", type="datetime")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("capture")
     
     * @var \DateTime
     */
    private $capture;

    /**
     * @ORM\OneToOne(targetEntity="TypeDePokemons")
     * @ORM\JoinColumn(name="typePokemon_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("typePokemon")
     
     * @var TypeDePokemons
     */
    private $typePokemon;

    /**
     * @ORM\OneToOne(targetEntity="Attaques")
     * @ORM\JoinColumn(name="attaque1_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque1")
     
     * @var Attaques
     */
    private $attaque1;

    /**
     * @ORM\OneToOne(targetEntity="Attaques")
     * @ORM\JoinColumn(name="attaque2_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque2")
     
     * @var Attaques
     */
    private $attaque2;

    /**
     * @ORM\OneToOne(targetEntity="Attaques")
     * @ORM\JoinColumn(name="attaque3_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque3")
     
     * @var Attaques
     */
    private $attaque3;

    /**
     * @ORM\OneToOne(targetEntity="Attaques")
     * @ORM\JoinColumn(name="attaque4_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque4")
     
     * @var Attaques
     */
    private $attaque4;


    /**
     * Set npcpokemonsInternal
     *
     * @param \Pokemon\ApiBundle\Entity\Npc $npcpokemonsInternal
     *
     * @return Pokemons
     */
    public function setNpcpokemonsInternal(\Pokemon\ApiBundle\Entity\Npc $npcpokemonsInternal = null)
    {
        $this->npcpokemonsInternal = $npcpokemonsInternal;

        return $this;
    }

    /**
     * Get npcpokemonsInternal
     *
     * @return \Pokemon\ApiBundle\Entity\Npc
     */
    public function getNpcpokemonsInternal()
    {
        return $this->npcpokemonsInternal;
    }
    /**
     * Set id
     *
     * @param integer id
     *
     * @return Pokemons
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Pokemons
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set surnom
     *
     * @param string surnom
     *
     * @return Pokemons
     */
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;

        return $this;
    }

    /**
     * Get surnom
     *
     * @return Pokemons
     */
    public function getSurnom()
    {
        return $this->surnom;
    }
    /**
     * Set niveau
     *
     * @param integer niveau
     *
     * @return Pokemons
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return Pokemons
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
    /**
     * Set capture
     *
     * @param \DateTime capture
     *
     * @return Pokemons
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * Get capture
     *
     * @return Pokemons
     */
    public function getCapture()
    {
        return $this->capture;
    }
    /**
     * Set typePokemon
     *
     * @param \Pokemon\ApiBundle\Entity\TypeDePokemons $typePokemon
     *
     * @return Pokemons
     */
    public function setTypePokemon(\Pokemon\ApiBundle\Entity\TypeDePokemons $typePokemon = null)
    {
        $this->typePokemon = $typePokemon;

        return $this;
    }

    /**
     * Get typePokemon
     *
     * @return \Pokemon\ApiBundle\Entity\TypeDePokemons
     */
    public function getTypePokemon()
    {
        return $this->typePokemon;
    }
    /**
     * Set attaque1
     *
     * @param \Pokemon\ApiBundle\Entity\Attaques $attaque1
     *
     * @return Pokemons
     */
    public function setAttaque1(\Pokemon\ApiBundle\Entity\Attaques $attaque1 = null)
    {
        $this->attaque1 = $attaque1;

        return $this;
    }

    /**
     * Get attaque1
     *
     * @return \Pokemon\ApiBundle\Entity\Attaques
     */
    public function getAttaque1()
    {
        return $this->attaque1;
    }
    /**
     * Set attaque2
     *
     * @param \Pokemon\ApiBundle\Entity\Attaques $attaque2
     *
     * @return Pokemons
     */
    public function setAttaque2(\Pokemon\ApiBundle\Entity\Attaques $attaque2 = null)
    {
        $this->attaque2 = $attaque2;

        return $this;
    }

    /**
     * Get attaque2
     *
     * @return \Pokemon\ApiBundle\Entity\Attaques
     */
    public function getAttaque2()
    {
        return $this->attaque2;
    }
    /**
     * Set attaque3
     *
     * @param \Pokemon\ApiBundle\Entity\Attaques $attaque3
     *
     * @return Pokemons
     */
    public function setAttaque3(\Pokemon\ApiBundle\Entity\Attaques $attaque3 = null)
    {
        $this->attaque3 = $attaque3;

        return $this;
    }

    /**
     * Get attaque3
     *
     * @return \Pokemon\ApiBundle\Entity\Attaques
     */
    public function getAttaque3()
    {
        return $this->attaque3;
    }
    /**
     * Set attaque4
     *
     * @param \Pokemon\ApiBundle\Entity\Attaques $attaque4
     *
     * @return Pokemons
     */
    public function setAttaque4(\Pokemon\ApiBundle\Entity\Attaques $attaque4 = null)
    {
        $this->attaque4 = $attaque4;

        return $this;
    }

    /**
     * Get attaque4
     *
     * @return \Pokemon\ApiBundle\Entity\Attaques
     */
    public function getAttaque4()
    {
        return $this->attaque4;
    }
}
