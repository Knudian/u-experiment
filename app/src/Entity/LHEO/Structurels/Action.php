<?php

namespace App\Entity\LHEO\Structurels;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\External\CodeFORMACODE;
use App\Entity\LHEO\Dicts\ModaliteEnseignement;
use App\Entity\LHEO\Dicts\ModaliteEntreeSortie;
use App\Entity\LHEO\Dicts\PerimetreRecrutement;
use App\Entity\LHEO\FirstCircle\LieuDeFormation;
use App\Entity\LHEO\SecondCircle\UrlAction;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Structurels\ActionRepository")
 */
class Action
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\ModaliteEntreeSortie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $modaliteEntreeSortie;

    /**
     * @ORM\Column(type="text")
     */
    private $modalitesAlternance;

    /**
     * @ORM\Column(type="boolean")
     */
    private $priseEnChargeFraisPossible;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\External\CodeFORMACODE")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codePublicVise;

    /**
     * @ORM\Column(type="boolean")
     */
    private $niveauEntreeObligatoire;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\ModaliteEnseignement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $modalitesEnseignement;

    /**
     * @ORM\Column(type="text")
     */
    private $rythmeFormation;

    /**
     * @ORM\Column(type="text")
     */
    private $conditionsSpecifiques;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreHeureCentre;

    /**
     * @ORM\Column(type="text")
     */
    private $modalitesRecrutement;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $langueFormation;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $infoPublicVise;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreHeureEntreprise;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $restauration;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $transport;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $infosPerimetreRecrutement;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureeConventionnee;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreHeureTotal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\PerimetreRecrutement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codePerimetreRecrutement;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $prixHoraireTTC;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $prixTotalTTC;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $dureeIndicative;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $accessHandicapes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\External\CodeFORMACODE")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codeModalitePedagogique;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $fraisRestants;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $modalitesPedagoques;

    /**
     * @ORM\Column(type="string", length=600)
     */
    private $detailsConditionsPriseEnCharge;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Structurels\Adresse")
     * @ORM\JoinColumn(nullable=false)
     */
    private $adresseInformation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\FirstCircle\LieuDeFormation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lieuDeFormation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\SecondCircle\UrlAction")
     * @ORM\JoinColumn(nullable=false)
     */
    private $urlAction;

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

    public function getModaliteEntreeSortie(): ?ModaliteEntreeSortie
    {
        return $this->modaliteEntreeSortie;
    }

    public function setModaliteEntreeSortie(?ModaliteEntreeSortie $modaliteEntreeSortie): self
    {
        $this->modaliteEntreeSortie = $modaliteEntreeSortie;

        return $this;
    }

    public function getModalitesAlternance(): ?string
    {
        return $this->modalitesAlternance;
    }

    public function setModalitesAlternance(string $modalitesAlternance): self
    {
        $this->modalitesAlternance = $modalitesAlternance;

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

    public function getCodePublicVise(): ?CodeFORMACODE
    {
        return $this->codePublicVise;
    }

    public function setCodePublicVise(?CodeFORMACODE $codePublicVise): self
    {
        $this->codePublicVise = $codePublicVise;

        return $this;
    }

    public function getNiveauEntreeObligatoire(): ?bool
    {
        return $this->niveauEntreeObligatoire;
    }

    public function setNiveauEntreeObligatoire(bool $niveauEntreeObligatoire): self
    {
        $this->niveauEntreeObligatoire = $niveauEntreeObligatoire;

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

    public function getRythmeFormation(): ?string
    {
        return $this->rythmeFormation;
    }

    public function setRythmeFormation(string $rythmeFormation): self
    {
        $this->rythmeFormation = $rythmeFormation;

        return $this;
    }

    public function getConditionsSpecifiques(): ?string
    {
        return $this->conditionsSpecifiques;
    }

    public function setConditionsSpecifiques(string $conditionsSpecifiques): self
    {
        $this->conditionsSpecifiques = $conditionsSpecifiques;

        return $this;
    }

    public function getNombreHeureCentre(): ?int
    {
        return $this->nombreHeureCentre;
    }

    public function setNombreHeureCentre(int $nombreHeureCentre): self
    {
        $this->nombreHeureCentre = $nombreHeureCentre;

        return $this;
    }

    public function getModalitesRecrutement(): ?string
    {
        return $this->modalitesRecrutement;
    }

    public function setModalitesRecrutement(string $modalitesRecrutement): self
    {
        $this->modalitesRecrutement = $modalitesRecrutement;

        return $this;
    }

    public function getLangueFormation(): ?string
    {
        return $this->langueFormation;
    }

    public function setLangueFormation(string $langueFormation): self
    {
        $this->langueFormation = $langueFormation;

        return $this;
    }

    public function getInfoPublicVise(): ?string
    {
        return $this->infoPublicVise;
    }

    public function setInfoPublicVise(string $infoPublicVise): self
    {
        $this->infoPublicVise = $infoPublicVise;

        return $this;
    }

    public function getNombreHeureEntreprise(): ?int
    {
        return $this->nombreHeureEntreprise;
    }

    public function setNombreHeureEntreprise(int $nombreHeureEntreprise): self
    {
        $this->nombreHeureEntreprise = $nombreHeureEntreprise;

        return $this;
    }

    public function getRestauration(): ?string
    {
        return $this->restauration;
    }

    public function setRestauration(string $restauration): self
    {
        $this->restauration = $restauration;

        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(string $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getInfosPerimetreRecrutement(): ?string
    {
        return $this->infosPerimetreRecrutement;
    }

    public function setInfosPerimetreRecrutement(string $infosPerimetreRecrutement): self
    {
        $this->infosPerimetreRecrutement = $infosPerimetreRecrutement;

        return $this;
    }

    public function getDureeConventionnee(): ?int
    {
        return $this->dureeConventionnee;
    }

    public function setDureeConventionnee(int $dureeConventionnee): self
    {
        $this->dureeConventionnee = $dureeConventionnee;

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

    public function getCodePerimetreRecrutement(): ?PerimetreRecrutement
    {
        return $this->codePerimetreRecrutement;
    }

    public function setCodePerimetreRecrutement(?PerimetreRecrutement $codePerimetreRecrutement): self
    {
        $this->codePerimetreRecrutement = $codePerimetreRecrutement;

        return $this;
    }

    public function getPrixHoraireTTC(): ?string
    {
        return $this->prixHoraireTTC;
    }

    public function setPrixHoraireTTC(string $prixHoraireTTC): self
    {
        $this->prixHoraireTTC = $prixHoraireTTC;

        return $this;
    }

    public function getPrixTotalTTC(): ?string
    {
        return $this->prixTotalTTC;
    }

    public function setPrixTotalTTC(string $prixTotalTTC): self
    {
        $this->prixTotalTTC = $prixTotalTTC;

        return $this;
    }

    public function getDureeIndicative(): ?string
    {
        return $this->dureeIndicative;
    }

    public function setDureeIndicative(string $dureeIndicative): self
    {
        $this->dureeIndicative = $dureeIndicative;

        return $this;
    }

    public function getAccessHandicapes(): ?string
    {
        return $this->accessHandicapes;
    }

    public function setAccessHandicapes(string $accessHandicapes): self
    {
        $this->accessHandicapes = $accessHandicapes;

        return $this;
    }

    public function getCodeModalitePedagogique(): ?CodeFORMACODE
    {
        return $this->codeModalitePedagogique;
    }

    public function setCodeModalitePedagogique(?CodeFORMACODE $codeModalitePedagogique): self
    {
        $this->codeModalitePedagogique = $codeModalitePedagogique;

        return $this;
    }

    public function getFraisRestants(): ?string
    {
        return $this->fraisRestants;
    }

    public function setFraisRestants(string $fraisRestants): self
    {
        $this->fraisRestants = $fraisRestants;

        return $this;
    }

    public function getModalitesPedagoques(): ?string
    {
        return $this->modalitesPedagoques;
    }

    public function setModalitesPedagoques(string $modalitesPedagoques): self
    {
        $this->modalitesPedagoques = $modalitesPedagoques;

        return $this;
    }

    public function getDetailsConditionsPriseEnCharge(): ?string
    {
        return $this->detailsConditionsPriseEnCharge;
    }

    public function setDetailsConditionsPriseEnCharge(string $detailsConditionsPriseEnCharge): self
    {
        $this->detailsConditionsPriseEnCharge = $detailsConditionsPriseEnCharge;

        return $this;
    }

    public function getAdresseInformation(): ?Adresse
    {
        return $this->adresseInformation;
    }

    public function setAdresseInformation(?Adresse $adresseInformation): self
    {
        $this->adresseInformation = $adresseInformation;

        return $this;
    }

    public function getLieuDeFormation(): ?LieuDeFormation
    {
        return $this->lieuDeFormation;
    }

    public function setLieuDeFormation(?LieuDeFormation $lieuDeFormation): self
    {
        $this->lieuDeFormation = $lieuDeFormation;

        return $this;
    }

    public function getUrlAction(): ?UrlAction
    {
        return $this->urlAction;
    }

    public function setUrlAction(?UrlAction $urlAction): self
    {
        $this->urlAction = $urlAction;

        return $this;
    }

}
