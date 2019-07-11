<?php

namespace App\Entity\LHEO\SecondCircle;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\Dicts\Financeur;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\SecondCircle\OrganismeFinanceurRepository")
 */
class OrganismeFinanceur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\Financeur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codeFinanceur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPlaceFinancees;

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

    public function getCodeFinanceur(): ?Financeur
    {
        return $this->codeFinanceur;
    }

    public function setCodeFinanceur(?Financeur $codeFinanceur): self
    {
        $this->codeFinanceur = $codeFinanceur;

        return $this;
    }

    public function getNbPlaceFinancees(): ?int
    {
        return $this->nbPlaceFinancees;
    }

    public function setNbPlaceFinancees(int $nbPlaceFinancees): self
    {
        $this->nbPlaceFinancees = $nbPlaceFinancees;

        return $this;
    }

}
