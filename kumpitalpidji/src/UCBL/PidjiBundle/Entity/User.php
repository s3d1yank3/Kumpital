<?php

namespace UCBL\PidjiBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UCBL\PidjiBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="UCBL\PidjiBundle\Entity\Annonce", mappedBy="user")
     */
    private  $listeAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="numTelephone", type="string", length=255)
     */
    private $numTelephone;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Add listeAnnonce.
     *
     * @param \UCBL\PidjiBundle\Entity\Annonce $listeAnnonce
     *
     * @return User
     */
    public function addListeAnnonce(\UCBL\PidjiBundle\Entity\Annonce $listeAnnonce)
    {
        $this->listeAnnonce[] = $listeAnnonce;

        return $this;
    }

    /**
     * Remove listeAnnonce.
     *
     * @param \UCBL\PidjiBundle\Entity\Annonce $listeAnnonce
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeListeAnnonce(\UCBL\PidjiBundle\Entity\Annonce $listeAnnonce)
    {
        return $this->listeAnnonce->removeElement($listeAnnonce);
    }

    /**
     * Get listeAnnonce.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListeAnnonce()
    {
        return $this->listeAnnonce;
    }

    /**
     * Set numTelephone.
     *
     * @param string $numTelephone
     *
     * @return User
     */
    public function setNumTelephone($numTelephone)
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }

    /**
     * Get numTelephone.
     *
     * @return string
     */
    public function getNumTelephone()
    {
        return $this->numTelephone;
    }
}
