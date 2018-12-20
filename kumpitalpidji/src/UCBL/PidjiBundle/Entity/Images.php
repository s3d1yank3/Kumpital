<?php

namespace UCBL\PidjiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Images
 *
 * @ORM\Table(name="images")
 * @ORM\Entity(repositoryClass="UCBL\PidjiBundle\Repository\ImagesRepository")
 * @Vich\Uploadable
 */
class Images
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     * @ORM\Column(name="uploadAt", type="datetime", nullable=false)
     */
    private $uploadAt;

    /**
     * @ORM\ManyToOne(targetEntity="UCBL\PidjiBundle\Entity\Annonce", inversedBy="images" )
     * @ORM\JoinColumn(nullable=false)
     */
    private  $annonce;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="annonce_image", fileNameProperty="nom")
     *
     * @var File
     */
    private $imageFile;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Images
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set Annonce
     *
     * @param \UCBL\PidjiBundle\Entity\Annonce $annonce
     *
     * @return Images
     */
    public function setAnnonce(\UCBL\PidjiBundle\Entity\Annonce $annonce)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get Annonce
     *
     * @return \UCBL\PidjiBundle\Entity\Annonce
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * Set uploadAt.
     *
     * @param \DateTime $uploadAt
     *
     * @return Images
     */
    public function setUploadAt($uploadAt)
    {
        $this->uploadAt = $uploadAt;

        return $this;
    }

    /**
     * Get uploadAt.
     *
     * @return \DateTime
     */
    public function getUploadAt()
    {
        return $this->uploadAt;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setImageFile(?File $image = null): void
    {
        $this->imageFile = $image;

        if (null !== $image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->uploadAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }
}
