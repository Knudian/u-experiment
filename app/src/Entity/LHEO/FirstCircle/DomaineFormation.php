<?php

namespace App\Entity\LHEO\FirstCircle;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\External\CodeFORMACODE;
use App\Entity\External\CodeNsf;
use App\Entity\External\CodeRome;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\FirstCircle\DomaineFormationRepository")
 */
class DomaineFormation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\External\CodeFORMACODE")
     */
    private $codeFormacodes;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\External\CodeNsf")
     */
    private $codeNsfs;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\External\CodeRome")
     */
    private $codeRomes;

    public function __construct()
    {
        $this->codeFormacodes = new ArrayCollection();
        $this->codeNsfs = new ArrayCollection();
        $this->codeRomes = new ArrayCollection();
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
        }

        return $this;
    }

    public function removeCodeFormacode(CodeFORMACODE $codeFormacode): self
    {
        if ($this->codeFormacodes->contains($codeFormacode)) {
            $this->codeFormacodes->removeElement($codeFormacode);
        }

        return $this;
    }

    /**
     * @return Collection|CodeNsf[]
     */
    public function getCodeNsfs(): Collection
    {
        return $this->codeNsfs;
    }

    public function addCodeNsf(CodeNsf $codeNsf): self
    {
        if (!$this->codeNsfs->contains($codeNsf)) {
            $this->codeNsfs[] = $codeNsf;
        }

        return $this;
    }

    public function removeCodeNsf(CodeNsf $codeNsf): self
    {
        if ($this->codeNsfs->contains($codeNsf)) {
            $this->codeNsfs->removeElement($codeNsf);
        }

        return $this;
    }

    /**
     * @return Collection|CodeRome[]
     */
    public function getCodeRomes(): Collection
    {
        return $this->codeRomes;
    }

    public function addCodeRome(CodeRome $codeRome): self
    {
        if (!$this->codeRomes->contains($codeRome)) {
            $this->codeRomes[] = $codeRome;
        }

        return $this;
    }

    public function removeCodeRome(CodeRome $codeRome): self
    {
        if ($this->codeRomes->contains($codeRome)) {
            $this->codeRomes->removeElement($codeRome);
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
