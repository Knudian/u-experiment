<?php declare(strict_types = 1);

namespace App\Entity\LHEO\Dicts;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\Dicts\PerimetreRecrutementRepository")
 */
class PerimetreRecrutement
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
     * @ORM\Column(type="string", length=20)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): PerimetreRecrutement
    {
        $this->name = $name;
        return $this;
    }
}
