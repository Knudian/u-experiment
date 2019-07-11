<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\SiretTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\ResumeOrganismeRepository")
 */
class ResumeOrganisme
{
    use SiretTrait;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $numeroActivite;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $nomOrganisme;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $raisonSociale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroActivite(): ?string
    {
        return $this->numeroActivite;
    }

    public function setNumeroActivite(string $numeroActivite): self
    {
        $this->numeroActivite = $numeroActivite;

        return $this;
    }

    public function getNomOrganisme(): ?string
    {
        return $this->nomOrganisme;
    }

    public function setNomOrganisme(string $nomOrganisme): self
    {
        $this->nomOrganisme = $nomOrganisme;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(string $raisonSociale): self
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id;
    }
}
