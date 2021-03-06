<?php
/**************************************************************************
 * Attaques.php, pokemon Android
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
 * Attaques
 *
 * @ORM\Table(name="pokemon_attaques")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\AttaquesRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Attaques
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
     * @ORM\Column(name="puissance", type="integer", nullable=true)
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("puissance")
     
     * @var integer
     */
    private $puissance;

    /**
     * @ORM\Column(name="precis", type="integer", nullable=true)
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("precis")
     
     * @var integer
     */
    private $precis;

    /**
     * @ORM\ManyToOne(targetEntity="Types")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("type")
     
     * @var Types
     */
    private $type;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return Attaques
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Attaques
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
     * @return Attaques
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return Attaques
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set puissance
     *
     * @param integer puissance
     *
     * @return Attaques
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return Attaques
     */
    public function getPuissance()
    {
        return $this->puissance;
    }
    /**
     * Set precis
     *
     * @param integer precis
     *
     * @return Attaques
     */
    public function setPrecis($precis)
    {
        $this->precis = $precis;

        return $this;
    }

    /**
     * Get precis
     *
     * @return Attaques
     */
    public function getPrecis()
    {
        return $this->precis;
    }
    /**
     * Set type
     *
     * @param \Pokemon\ApiBundle\Entity\Types $type
     *
     * @return Attaques
     */
    public function setType(\Pokemon\ApiBundle\Entity\Types $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Pokemon\ApiBundle\Entity\Types
     */
    public function getType()
    {
        return $this->type;
    }
}
