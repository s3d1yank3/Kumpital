<?php

namespace UCBL\PidjiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity(repositoryClass="UCBL\PidjiBundle\Repository\TypeRepository")
 */
class Type
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="UCBL\PidjiBundle\Entity\Annonce", mappedBy="types")
     */
    private $listeAnnonces;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Type
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeAnnonces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listeAnnonce
     *
     * @param \UCBL\PidjiBundle\Entity\Annonce $listeAnnonce
     *
     * @return Type
     */
    public function addListeAnnonce(\UCBL\PidjiBundle\Entity\Annonce $listeAnnonce)
    {
        $this->listeAnnonces[] = $listeAnnonce;

        return $this;
    }

    /**
     * Remove listeAnnonce
     *
     * @param \UCBL\PidjiBundle\Entity\Annonce $listeAnnonce
     */
    public function removeListeAnnonce(\UCBL\PidjiBundle\Entity\Annonce $listeAnnonce)
    {
        $this->listeAnnonces->removeElement($listeAnnonce);
    }

    /**
     * Get listeAnnonces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListeAnnonces()
    {
        return $this->listeAnnonces;
    }
}
