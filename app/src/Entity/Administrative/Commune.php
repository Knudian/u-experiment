<?php declare(strict_types = 1);

namespace App\Entity\Administrative;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(itemOperations={"GET"})
 * @ORM\Entity(repositoryClass="App\Repository\Administrative\CommuneRepository")
 */
class Commune
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=5)
     */
    private $codeInsee;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=5)
     */
    private $codeCanton;

    /**
     * @var string
     * @ORM\Column(type="string", length=5)
     */
    private $codePostal;

    /**
     * @var Departement
     * @ORM\ManyToOne(targetEntity="App\Entity\Administrative\Departement", inversedBy="communes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departement;

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

    public function getCodeInsee(): string
    {
        return $this->codeInsee;
    }

    public function setCodeInsee(string $codeInsee): self
    {
        if (strlen($codeInsee) < 5) {
            $codeInsee = "0" . $codeInsee;
        }
        $this->codeInsee = $codeInsee;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getCodeCanton(): ?string
    {
        return $this->codeCanton;
    }

    public function setCodeCanton(?string $codeCanton): self
    {
        if (is_null($codeCanton)) {
            $codeCanton = "1";
        }
        $this->codeCanton = $codeCanton;
        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {

        if (strlen($codePostal) < 5) {
            $codePostal = "0" . $codePostal;
        }
        $this->codePostal = $codePostal;
        return $this;
    }

    public function getDepartement(): ?Departement
    {
        return $this->departement;
    }

    public function setDepartement(?Departement $departement): self
    {
        $this->departement = $departement;
        return $this;
    }
}
