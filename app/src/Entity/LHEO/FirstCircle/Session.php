<?php

namespace App\Entity\LHEO\FirstCircle;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\Dicts\EtatRecrutement;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\FirstCircle\SessionRepository")
 */
class Session
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $periodeInscriptionDebut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $periodeInscriptionFin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\Dicts\EtatRecrutement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etatRecrutement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LHEO\FirstCircle\AdresseInscription", inversedBy="sessions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $adresseInscription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modalitesInscriptions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPeriodeInscriptionDebut(): ?\DateTimeInterface
    {
        return $this->periodeInscriptionDebut;
    }

    public function setPeriodeInscriptionDebut(\DateTimeInterface $periodeInscriptionDebut): self
    {
        $this->periodeInscriptionDebut = $periodeInscriptionDebut;

        return $this;
    }

    public function getPeriodeInscriptionFin(): ?\DateTimeInterface
    {
        return $this->periodeInscriptionFin;
    }

    public function setPeriodeInscriptionFin(\DateTimeInterface $periodeInscriptionFin): self
    {
        $this->periodeInscriptionFin = $periodeInscriptionFin;

        return $this;
    }

    public function getEtatRecrutement(): ?EtatRecrutement
    {
        return $this->etatRecrutement;
    }

    public function setEtatRecrutement(?EtatRecrutement $etatRecrutement): self
    {
        $this->etatRecrutement = $etatRecrutement;

        return $this;
    }

    public function getAdresseInscription(): ?AdresseInscription
    {
        return $this->adresseInscription;
    }

    public function setAdresseInscription(?AdresseInscription $adresseInscription): self
    {
        $this->adresseInscription = $adresseInscription;

        return $this;
    }

    public function getModalitesInscriptions(): ?string
    {
        return $this->modalitesInscriptions;
    }

    public function setModalitesInscriptions(string $modalitesInscriptions): self
    {
        $this->modalitesInscriptions = $modalitesInscriptions;

        return $this;
    }
}
