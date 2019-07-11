<?php

namespace App\Entity\LHEO\SecondCircle;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\External\CodeCERTIFINFO;
use App\Entity\External\CodeRNCP;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\SecondCircle\CertificationRepository")
 */
class Certification
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\External\CodeRNCP")
     */
    private $codeRNCP;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\External\CodeCERTIFINFO")
     */
    private $codeCERTIFINFO;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeRNCP(): ?CodeRNCP
    {
        return $this->codeRNCP;
    }

    public function setCodeRNCP(?CodeRNCP $codeRNCP): self
    {
        $this->codeRNCP = $codeRNCP;

        return $this;
    }

    public function getCodeCERTIFINFO(): ?CodeCERTIFINFO
    {
        return $this->codeCERTIFINFO;
    }

    public function setCodeCERTIFINFO(?CodeCERTIFINFO $codeCERTIFINFO): self
    {
        $this->codeCERTIFINFO = $codeCERTIFINFO;

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
