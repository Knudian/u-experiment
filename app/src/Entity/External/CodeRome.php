<?php declare(strict_types = 1);

namespace App\Entity\External;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @see https://public.opendatasoft.com/explore/dataset/pole-emploi-rome-arborescence-thematique/table/
 * @ApiResource(itemOperations={"GET"})
 * @ORM\Entity(repositoryClass="App\Repository\External\CodeRomeRepository")
 */
class CodeRome
{
    /**
     * @var string
     * @ORM\Id()
     * @ORM\Column(type="string", length=5)
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return CodeRome
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     * @return CodeRome
     */
    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;
        return $this;
    }
}
