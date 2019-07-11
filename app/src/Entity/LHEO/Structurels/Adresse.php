<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Administrative\Commune;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\AdresseRepository")
 */
class Adresse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $ligne = [];

    /**
     * @ORM\Column(type="string", length=160)
     */
    private $courriel;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $longitude;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Administrative\Commune")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLigne(): ?array
    {
        return $this->ligne;
    }

    public function setLigne(?array $ligne): self
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function getCourriel(): ?string
    {
        return $this->courriel;
    }

    public function setCourriel(string $courriel): self
    {
        $this->courriel = $courriel;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getVille(): ?Commune
    {
        return $this->ville;
    }

    public function setVille(?Commune $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

}
