<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\ModulePrerequisRepository")
 */
class ModulePrerequis
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $referenceModule;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Structurels\Formation", inversedBy="modulesPrerequis")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferenceModule(): ?string
    {
        return $this->referenceModule;
    }

    public function setReferenceModule(string $referenceModule): self
    {
        $this->referenceModule = $referenceModule;

        return $this;
    }

    public function getFormation(): ?Formation
    {
        return $this->formation;
    }

    public function setFormation(?Formation $formation): self
    {
        $this->formation = $formation;

        return $this;
    }
}
