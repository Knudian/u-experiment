<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\Dicts\TypeModule;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\SousModuleRepository")
 */
class SousModule
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\TypeModule")
     */
    private $typeModule;

    /**
     * @ORM\Column(type="text")
     */
    private $referenceModule;

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

    public function getTypeModule(): ?TypeModule
    {
        return $this->typeModule;
    }

    public function setTypeModule(?TypeModule $typeModule): self
    {
        $this->typeModule = $typeModule;

        return $this;
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
}
