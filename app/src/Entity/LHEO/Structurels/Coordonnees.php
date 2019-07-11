<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\CoordonneesRepository")
 */
class Coordonnees
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $fax = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $portable = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $web = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $lignes = [];

    /**
     * @ORM\Column(type="string", length=160)
     */
    private $courriel;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $civilite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getFax(): ?array
    {
        return $this->fax;
    }

    public function setFax(?array $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getPortable(): ?array
    {
        return $this->portable;
    }

    public function setPortable(?array $portable): self
    {
        $this->portable = $portable;

        return $this;
    }

    public function getWeb(): ?array
    {
        return $this->web;
    }

    public function setWeb(?array $web): self
    {
        $this->web = $web;

        return $this;
    }

    public function getLignes(): ?array
    {
        return $this->lignes;
    }

    public function setLignes(?array $lignes): self
    {
        $this->lignes = $lignes;

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

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

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
