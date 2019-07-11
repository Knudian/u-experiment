<?php declare(strict_types = 1);

namespace App\Entity\LHEO;

use App\Exception\SiretException;
use App\Helpers\SiretHelper;
use Doctrine\ORM\Mapping as ORM;

trait SiretTrait
{
    /**
     * @var string
     * @ORM\Column(type="string", length=14)
     */
    protected $siret;

    /**
     * @param string $siret
     * @return self
     * @throws SiretException
     */
    public function setSiret(string $siret): self
    {
        SiretHelper::validate($siret);
        $this->siret = $siret;
        return $this;
    }

    public function getSiret(): string
    {
        return $this->siret;
    }
}
