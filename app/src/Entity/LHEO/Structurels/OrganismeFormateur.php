<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\SecondCircle\Potentiel;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\OrganismeFormateurRepository")
 */
class OrganismeFormateur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $raisonSocialeFormateur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\SecondCircle\Potentiel")
     * @ORM\JoinColumn(nullable=false)
     */
    private $potentiel;

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

    public function getRaisonSocialeFormateur(): ?string
    {
        return $this->raisonSocialeFormateur;
    }

    public function setRaisonSocialeFormateur(string $raisonSocialeFormateur): self
    {
        $this->raisonSocialeFormateur = $raisonSocialeFormateur;

        return $this;
    }

    public function getPotentiel(): ?Potentiel
    {
        return $this->potentiel;
    }

    public function setPotentiel(?Potentiel $potentiel): self
    {
        $this->potentiel = $potentiel;

        return $this;
    }

}
