<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\Dicts\Niveau;
use App\Entity\LHEO\Dicts\ObjectifGeneralFormation;
use App\Entity\LHEO\Dicts\TypeParcours;
use App\Entity\LHEO\FirstCircle\ContactFormation;
use App\Entity\LHEO\FirstCircle\DomaineFormation;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\FormationRepository")
 */
class Formation
{
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
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\TypeParcours")
     * @ORM\JoinColumn(nullable=false)
     */
    private $parcoursDeFormation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\Niveau")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codeNiveauEntree;

    /**
     * @ORM\Column(type="text")
     */
    private $contenuFormation;

    /**
     * @ORM\Column(type="text")
     */
    private $resultatsAttendus;

    /**
     * @ORM\Column(type="text")
     */
    private $objecifFormation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $certifiante;

    /**
     * @ORM\Column(type="text")
     */
    private $identifiantModule;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $hebergement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\ObjectifGeneralFormation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $objectifGeneralFormation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\Niveau")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codeNiveauSortie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LHEO\Structurels\ModulePrerequis", mappedBy="formation", orphanRemoval=true)
     */
    private $modulesPrerequis;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\FirstCircle\DomaineFormation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $domaineFormation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\FirstCircle\ContactFormation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $contactFormation;

    public function __construct()
    {
        $this->modulesPrerequis = new ArrayCollection();
    }

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

    public function getParcoursDeFormation(): ?TypeParcours
    {
        return $this->parcoursDeFormation;
    }

    public function setParcoursDeFormation(?TypeParcours $parcoursDeFormation): self
    {
        $this->parcoursDeFormation = $parcoursDeFormation;

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

    public function getContenuFormation(): ?string
    {
        return $this->contenuFormation;
    }

    public function setContenuFormation(string $contenuFormation): self
    {
        $this->contenuFormation = $contenuFormation;

        return $this;
    }

    public function getResultatsAttendus(): ?string
    {
        return $this->resultatsAttendus;
    }

    public function setResultatsAttendus(string $resultatsAttendus): self
    {
        $this->resultatsAttendus = $resultatsAttendus;

        return $this;
    }

    public function getObjecifFormation(): ?string
    {
        return $this->objecifFormation;
    }

    public function setObjecifFormation(string $objecifFormation): self
    {
        $this->objecifFormation = $objecifFormation;

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

    public function getIdentifiantModule(): ?string
    {
        return $this->identifiantModule;
    }

    public function setIdentifiantModule(string $identifiantModule): self
    {
        $this->identifiantModule = $identifiantModule;

        return $this;
    }

    public function getHebergement(): ?string
    {
        return $this->hebergement;
    }

    public function setHebergement(string $hebergement): self
    {
        $this->hebergement = $hebergement;

        return $this;
    }

    public function getObjectifGeneralFormation(): ?ObjectifGeneralFormation
    {
        return $this->objectifGeneralFormation;
    }

    public function setObjectifGeneralFormation(?ObjectifGeneralFormation $objectifGeneralFormation): self
    {
        $this->objectifGeneralFormation = $objectifGeneralFormation;

        return $this;
    }

    public function getCodeNiveauSortie(): ?Niveau
    {
        return $this->codeNiveauSortie;
    }

    public function setCodeNiveauSortie(?Niveau $codeNiveauSortie): self
    {
        $this->codeNiveauSortie = $codeNiveauSortie;

        return $this;
    }

    /**
     * @return Collection|ModulePrerequis[]
     */
    public function getModulesPrerequis(): Collection
    {
        return $this->modulesPrerequis;
    }

    public function addModulesPrerequi(ModulePrerequis $modulesPrerequi): self
    {
        if (!$this->modulesPrerequis->contains($modulesPrerequi)) {
            $this->modulesPrerequis[] = $modulesPrerequi;
            $modulesPrerequi->setFormation($this);
        }

        return $this;
    }

    public function removeModulesPrerequi(ModulePrerequis $modulesPrerequi): self
    {
        if ($this->modulesPrerequis->contains($modulesPrerequi)) {
            $this->modulesPrerequis->removeElement($modulesPrerequi);
            // set the owning side to null (unless already changed)
            if ($modulesPrerequi->getFormation() === $this) {
                $modulesPrerequi->setFormation(null);
            }
        }

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

    public function getContactFormation(): ?ContactFormation
    {
        return $this->contactFormation;
    }

    public function setContactFormation(?ContactFormation $contactFormation): self
    {
        $this->contactFormation = $contactFormation;

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
