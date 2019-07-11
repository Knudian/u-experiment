<?php
// src/DataFixtures/FakerFixtures.php
namespace App\DataFixtures;

use App\Entity\External\CodeFORMACODE;
use App\Entity\External\CodeNsf;
use App\Entity\External\CodeRome;
use App\Entity\LHEO\FirstCircle\DomaineFormation;
use App\Entity\LHEO\SecondCircle\Potentiel;
use App\Repository\External\CodeNsfRepository;
use App\Repository\External\CodeRomeRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

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

    public function load(ObjectManager $manager) :void
    {
        // On configure dans quelles langues nous voulons nos données
        $faker = Faker\Factory::create('fr_FR');

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