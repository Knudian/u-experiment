<?php

namespace App\Entity\LHEO\SecondCircle;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\External\CodeFORMACODE;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\SecondCircle\PotentielRepository")
 */
class Potentiel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\External\CodeFORMACODE", mappedBy="potentiel")
     */
    private $codeFormacodes;

    public function __construct()
    {
        $this->codeFormacodes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|CodeFORMACODE[]
     */
    public function getCodeFormacodes(): Collection
    {
        return $this->codeFormacodes;
    }

    public function addCodeFormacode(CodeFORMACODE $codeFormacode): self
    {
        if (!$this->codeFormacodes->contains($codeFormacode)) {
            $this->codeFormacodes[] = $codeFormacode;
            $codeFormacode->setPotentiel($this);
        }

        return $this;
    }

    public function removeCodeFormacode(CodeFORMACODE $codeFormacode): self
    {
        if ($this->codeFormacodes->contains($codeFormacode)) {
            $this->codeFormacodes->removeElement($codeFormacode);
            // set the owning side to null (unless already changed)
            if ($codeFormacode->getPotentiel() === $this) {
                $codeFormacode->setPotentiel(null);
            }
        }

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
