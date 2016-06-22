<?php
/**************************************************************************
 * Objets.php, pokemon Android
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
 * Objets
 *
 * @ORM\Table(name="pokemon_objets")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\ObjetsRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Objets
{
    /**
     * @ORM\ManyToOne(targetEntity="Npc", inversedBy="objets")
     * @ORM\JoinColumn(name="NpcobjetsInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("npcobjetsInternal")
     
     * @var Npc
     */
    private $npcobjetsInternal;

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
     * @ORM\Column(name="quantite", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("quantite")
     
     * @var integer
     */
    private $quantite;

    /**
     * @ORM\OneToOne(targetEntity="TypeObjet")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("type")
     
     * @var TypeObjet
     */
    private $type;


    /**
     * Set npcobjetsInternal
     *
     * @param \Pokemon\ApiBundle\Entity\Npc $npcobjetsInternal
     *
     * @return Objets
     */
    public function setNpcobjetsInternal(\Pokemon\ApiBundle\Entity\Npc $npcobjetsInternal = null)
    {
        $this->npcobjetsInternal = $npcobjetsInternal;

        return $this;
    }

    /**
     * Get npcobjetsInternal
     *
     * @return \Pokemon\ApiBundle\Entity\Npc
     */
    public function getNpcobjetsInternal()
    {
        return $this->npcobjetsInternal;
    }
    /**
     * Set id
     *
     * @param integer id
     *
     * @return Objets
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Objets
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
     * @return Objets
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return Objets
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set quantite
     *
     * @param integer quantite
     *
     * @return Objets
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return Objets
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
    /**
     * Set type
     *
     * @param \Pokemon\ApiBundle\Entity\TypeObjet $type
     *
     * @return Objets
     */
    public function setType(\Pokemon\ApiBundle\Entity\TypeObjet $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Pokemon\ApiBundle\Entity\TypeObjet
     */
    public function getType()
    {
        return $this->type;
    }
}
