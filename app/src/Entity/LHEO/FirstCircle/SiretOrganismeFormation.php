<?php

namespace App\Entity\LHEO\FirstCircle;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\LHEO\SiretTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\FirstCircle\SiretOrganismeFormationRepository")
 */
class SiretOrganismeFormation
{
    use SiretTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id;
    }
}
