<?php
/**************************************************************************
 * Types.php, pokemon Android
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
 * Types
 *
 * @ORM\Table(name="pokemon_types")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\TypesRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Types
{
    /**
     * @ORM\ManyToOne(targetEntity="TypeDePokemons", inversedBy="types")
     * @ORM\JoinColumn(name="TypeDePokemonstypesInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("typeDePokemonstypesInternal")
     
     * @var TypeDePokemons
     */
    private $typeDePokemonstypesInternal;

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
     * @ORM\ManyToOne(targetEntity="Types", inversedBy="faibleContre")
     * @ORM\JoinColumn(name="TypesfaibleContreInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("typesfaibleContreInternal")
     
     * @var Types
     */
    private $typesfaibleContreInternal;

    /**
     * @ORM\OneToMany(targetEntity="Types", mappedBy="typesfaibleContreInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("faibleContre")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $faibleContre;

    /**
     * @ORM\ManyToOne(targetEntity="Types", inversedBy="fortContre")
     * @ORM\JoinColumn(name="TypesfortContreInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("typesfortContreInternal")
     
     * @var Types
     */
    private $typesfortContreInternal;

    /**
     * @ORM\OneToMany(targetEntity="Types", mappedBy="typesfortContreInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("fortContre")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fortContre;


    /**
     * Set typeDePokemonstypesInternal
     *
     * @param \Pokemon\ApiBundle\Entity\TypeDePokemons $typeDePokemonstypesInternal
     *
     * @return Types
     */
    public function setTypeDePokemonstypesInternal(\Pokemon\ApiBundle\Entity\TypeDePokemons $typeDePokemonstypesInternal = null)
    {
        $this->typeDePokemonstypesInternal = $typeDePokemonstypesInternal;

        return $this;
    }

    /**
     * Get typeDePokemonstypesInternal
     *
     * @return \Pokemon\ApiBundle\Entity\TypeDePokemons
     */
    public function getTypeDePokemonstypesInternal()
    {
        return $this->typeDePokemonstypesInternal;
    }
    /**
     * Set id
     *
     * @param integer id
     *
     * @return Types
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Types
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
     * @return Types
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return Types
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set typesfaibleContreInternal
     *
     * @param \Pokemon\ApiBundle\Entity\Types $typesfaibleContreInternal
     *
     * @return Types
     */
    public function setTypesfaibleContreInternal(\Pokemon\ApiBundle\Entity\Types $typesfaibleContreInternal = null)
    {
        $this->typesfaibleContreInternal = $typesfaibleContreInternal;

        return $this;
    }

    /**
     * Get typesfaibleContreInternal
     *
     * @return \Pokemon\ApiBundle\Entity\Types
     */
    public function getTypesfaibleContreInternal()
    {
        return $this->typesfaibleContreInternal;
    }
    /**
     * Add faibleContre
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\Types $faibleContre
     *
     * @return Types
     */
    public function addFaibleContre(\Pokemon\ApiBundle\Entity\Types $faibleContre)
    {
        $this->faibleContres[] = $faibleContre;

        return $this;
    }

    /**
     * Remove faibleContre
     *
     * @param \Pokemon\ApiBundle\Entity\Types $faibleContre
     */
    public function removeFaibleContre(\Pokemon\ApiBundle\Entity\Types $faibleContre)
    {
        $this->faibleContres->removeElement($faibleContre);
    }

    /**
     * Get faibleContres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFaibleContre()
    {
        return $this->faibleContre;
    }
    /**
     * Set typesfortContreInternal
     *
     * @param \Pokemon\ApiBundle\Entity\Types $typesfortContreInternal
     *
     * @return Types
     */
    public function setTypesfortContreInternal(\Pokemon\ApiBundle\Entity\Types $typesfortContreInternal = null)
    {
        $this->typesfortContreInternal = $typesfortContreInternal;

        return $this;
    }

    /**
     * Get typesfortContreInternal
     *
     * @return \Pokemon\ApiBundle\Entity\Types
     */
    public function getTypesfortContreInternal()
    {
        return $this->typesfortContreInternal;
    }
    /**
     * Add fortContre
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\Types $fortContre
     *
     * @return Types
     */
    public function addFortContre(\Pokemon\ApiBundle\Entity\Types $fortContre)
    {
        $this->fortContres[] = $fortContre;

        return $this;
    }

    /**
     * Remove fortContre
     *
     * @param \Pokemon\ApiBundle\Entity\Types $fortContre
     */
    public function removeFortContre(\Pokemon\ApiBundle\Entity\Types $fortContre)
    {
        $this->fortContres->removeElement($fortContre);
    }

    /**
     * Get fortContres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFortContre()
    {
        return $this->fortContre;
    }
}
