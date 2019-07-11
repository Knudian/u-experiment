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
