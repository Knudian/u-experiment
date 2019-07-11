<?php

namespace App\Entity\External;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\SecondCircle\Potentiel;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\External\CodeFORMACODERepository")
 */
class CodeFORMACODE
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\SecondCircle\Potentiel", inversedBy="codeFormacodes")
     */
    private $potentiel;

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id;
    }
}
