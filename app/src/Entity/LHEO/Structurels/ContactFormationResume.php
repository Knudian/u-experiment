<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\ContactFormationResumeRepository")
 */
class ContactFormationResume
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $telfixe = [];

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $courriel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTelfixe(): ?array
    {
        return $this->telfixe;
    }

    public function setTelfixe(?array $telfixe): self
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    public function getCourriel(): ?string
    {
        return $this->courriel;
    }

    public function setCourriel(?string $courriel): self
    {
        $this->courriel = $courriel;

        return $this;
    }
}
