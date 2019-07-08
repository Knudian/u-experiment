<?php declare(strict_types = 1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @see https://public.opendatasoft.com/explore/dataset/codes-nsf/table/?flg=fr
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CodeNsfRepository")
 */
final class CodeNsf
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $formation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(string $formation): self
    {
        $this->formation = $formation;
        return $this;
    }
}
