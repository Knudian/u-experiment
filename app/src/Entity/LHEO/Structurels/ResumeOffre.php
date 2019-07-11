<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\External\CodeFORMACODE;
use App\Entity\LHEO\Dicts\ModaliteEnseignement;
use App\Entity\LHEO\Dicts\Niveau;
use App\Entity\LHEO\FirstCircle\DomaineFormation;
use App\Entity\LHEO\SiretTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\ResumeOffreRepository")
 */
class ResumeOffre
{
    use SiretTrait;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intituleFormation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\Niveau")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codeNiveauEntree;

    /**
     * @ORM\Column(type="boolean")
     */
    private $priseEnChargeFraisPossible;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\ModaliteEnseignement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $modalitesEnseignement;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $nomOrganisme;

    /**
     * @ORM\Column(type="boolean")
     */
    private $certifiante;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreHeureTotal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\External\CodeFORMACODE")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codePublicVise;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\FirstCircle\DomaineFormation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $domaineFormation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntituleFormation(): ?string
    {
        return $this->intituleFormation;
    }

    public function setIntituleFormation(string $intituleFormation): self
    {
        $this->intituleFormation = $intituleFormation;

        return $this;
    }

    public function getCodeNiveauEntree(): ?Niveau
    {
        return $this->codeNiveauEntree;
    }

    public function setCodeNiveauEntree(?Niveau $codeNiveauEntree): self
    {
        $this->codeNiveauEntree = $codeNiveauEntree;

        return $this;
    }

    public function getPriseEnChargeFraisPossible(): ?bool
    {
        return $this->priseEnChargeFraisPossible;
    }

    public function setPriseEnChargeFraisPossible(bool $priseEnChargeFraisPossible): self
    {
        $this->priseEnChargeFraisPossible = $priseEnChargeFraisPossible;

        return $this;
    }

    public function getModalitesEnseignement(): ?ModaliteEnseignement
    {
        return $this->modalitesEnseignement;
    }

    public function setModalitesEnseignement(?ModaliteEnseignement $modalitesEnseignement): self
    {
        $this->modalitesEnseignement = $modalitesEnseignement;

        return $this;
    }

    public function getNomOrganisme(): ?string
    {
        return $this->nomOrganisme;
    }

    public function setNomOrganisme(string $nomOrganisme): self
    {
        $this->nomOrganisme = $nomOrganisme;

        return $this;
    }

    public function getCertifiante(): ?bool
    {
        return $this->certifiante;
    }

    public function setCertifiante(bool $certifiante): self
    {
        $this->certifiante = $certifiante;

        return $this;
    }

    public function getNombreHeureTotal(): ?int
    {
        return $this->nombreHeureTotal;
    }

    public function setNombreHeureTotal(int $nombreHeureTotal): self
    {
        $this->nombreHeureTotal = $nombreHeureTotal;

        return $this;
    }

    public function getCodePublicVise(): ?CodeFORMACODE
    {
        return $this->codePublicVise;
    }

    public function setCodePublicVise(?CodeFORMACODE $codePublicVise): self
    {
        $this->codePublicVise = $codePublicVise;

        return $this;
    }

    public function getDomaineFormation(): ?DomaineFormation
    {
        return $this->domaineFormation;
    }

    public function setDomaineFormation(?DomaineFormation $domaineFormation): self
    {
        $this->domaineFormation = $domaineFormation;

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
