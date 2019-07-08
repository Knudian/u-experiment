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
     * Code INSEE de la commune
     * @ORM\Id()
     * @ORM\Column(type="string", length=5)
     */
    private $id;

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
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

    public function setCodeCanton(string $codeCanton): self
    {
        $this->codeCanton = $codeCanton;
        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
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
