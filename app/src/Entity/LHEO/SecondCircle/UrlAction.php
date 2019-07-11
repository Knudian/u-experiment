<?php

namespace App\Entity\LHEO\SecondCircle;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LHEO\SecondCircle\UrlActionRepository")
 */
class UrlAction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $urlweb = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrlweb(): ?array
    {
        return $this->urlweb;
    }

    public function setUrlweb(array $urlweb): self
    {
        $this->urlweb = $urlweb;

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
