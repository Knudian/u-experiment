<?php

namespace App\Command;

use App\Command\Dataset\DepartementList;
use App\Entity\Administrative\Departement;
use App\Repository\Administrative\RegionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class LoadDepartementCommand
 * @package App\Command
 */
class LoadDepartementCommand extends Command
{
    protected static $defaultName = 'app:load:departements';

    /** @var EntityManagerInterface */
    private $entityManager;
    /** @var RegionRepository */
    private $regionRepository;

    public function __construct(EntityManagerInterface $entityManager, RegionRepository $regionRepository)
    {
        $this->entityManager = $entityManager;
        $this->regionRepository = $regionRepository;
        parent::__construct(null);
    }

    protected function configure()
    {
        $this
            ->setDescription('Importe les départements français');
    }

    /**
     * Charge le jeux de donnés de la classe DepartementList
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $departements = DepartementList::VALUES;
        $io->createProgressBar(count($departements));
        $io->progressStart(0);
        foreach ($departements as $departement) {
            $region = $this->regionRepository->find($departement[1]);
            $dpt = new Departement();
            $dpt
                ->setId($departement[0])
                ->setName($departement[2])
                ->setRegion($region);
            $this->entityManager->persist($dpt);
            $io->progressAdvance();
        }

        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Les départements français ont été importés.');
    }
}
