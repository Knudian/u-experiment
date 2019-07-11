<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\FirstCircle\SiretOrganismeFormation;
use App\Entity\LHEO\SecondCircle\Potentiel;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\OrganismeFormationResponsableRepository")
 */
class OrganismeFormationResponsable
{
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

    /**
     * @ORM\Column(type="text")
     */
    private $renseignementSpecifiques;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\SecondCircle\Potentiel")
     * @ORM\JoinColumn(nullable=false)
     */
    private $potentiel;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\LHEO\FirstCircle\SiretOrganismeFormation", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $siretOrganismeFormation;

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

    public function getRenseignementSpecifiques(): ?string
    {
        return $this->renseignementSpecifiques;
    }

    public function setRenseignementSpecifiques(string $renseignementSpecifiques): self
    {
        $this->renseignementSpecifiques = $renseignementSpecifiques;

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

    public function getSiretOrganismeFormation(): ?SiretOrganismeFormation
    {
        return $this->siretOrganismeFormation;
    }

    public function setSiretOrganismeFormation(SiretOrganismeFormation $siretOrganismeFormation): self
    {
        $this->siretOrganismeFormation = $siretOrganismeFormation;

        return $this;
    }

}
