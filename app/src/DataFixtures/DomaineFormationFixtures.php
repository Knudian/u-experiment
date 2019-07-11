<?php
namespace App\DataFixtures;

use App\Entity\External\CodeFORMACODE;
use App\Entity\LHEO\FirstCircle\DomaineFormation;
use App\Repository\External\CodeNsfRepository;
use App\Repository\External\CodeRomeRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class DomaineFormationFixtures
 *
 * @package App\DataFixtures
 */
class DomaineFormationFixtures extends Fixture
{
    /**
     * @var CodeNsfRepository
     */
    private $codeNsfRepository;
    /**
     * @var CodeRomeRepository
     */
    private $codeRomeRepository;

    public function __construct(CodeNsfRepository $codeNsfRepository, CodeRomeRepository $codeRomeRepository)
    {
        $this->codeNsfRepository = $codeNsfRepository;
        $this->codeRomeRepository = $codeRomeRepository;
    }

    /**
     * Fonction permettant de génerer dans fausses entités pour simuler le fonctionnement
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) :void
    {
        $codeFormacodeList = [];
        for ($i = 0; $i < 3; $i++) {
            $codeFormacode = new CodeFORMACODE();
            $codeFormacode->setPotentiel(null);
            $manager->persist($codeFormacode);
            $codeFormacodeList[] = $codeFormacode;
        }

        /** @var Collection $codeNsfList */
        $codeNsfList = $this->codeNsfRepository->findAll();

        /** @var Collection $codeRomeList */
        $codeRomeList = $this->codeRomeRepository->findAll();

        for ($i = 0; $i < 3; $i++) {
            $domaine = new DomaineFormation();
            $domaine->addCodeFormacode($codeFormacodeList[$i]);
            $domaine->addCodeNsf($codeNsfList[$i]);
            $domaine->addCodeRome($codeRomeList[$i]);
            $manager->persist($domaine);
        }

        $manager->flush();
    }
}