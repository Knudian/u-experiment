<?php

namespace App\Entity\LHEO\FirstCircle;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\Structurels\Coordonnees;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\FirstCircle\CoordonneesOrganismeRepository")
 */
class CoordonneesOrganisme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Structurels\Coordonnees")
     * @ORM\JoinColumn(nullable=false)
     */
    private $coordonnees;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoordonnees(): ?Coordonnees
    {
        return $this->coordonnees;
    }

    public function setCoordonnees(?Coordonnees $coordonnees): self
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }
}
