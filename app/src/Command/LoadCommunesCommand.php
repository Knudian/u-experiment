<?php

namespace App\Command;

use App\Command\Dataset\CommuneList;
use App\Entity\Administrative\Commune;
use App\Repository\Administrative\DepartementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class LoadCommunesCommand
 * @package App\Command
 */
class LoadCommunesCommand extends Command
{
    protected static $defaultName = 'app:load:communes';
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    /**
     * @var DepartementRepository
     */
    private $repository;

    public function __construct(EntityManagerInterface $entityManager, DepartementRepository $repository)
    {
        parent::__construct(null);
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    protected function configure()
    {
        $this
            ->setDescription('Importe les communes françaises.')
        ;
    }

    /**
     * Charge le jeux de donnés de la classe CommuneList
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $communes = CommuneList::VALUES;
        $io->createProgressBar(count($communes));
        $io->progressStart();

        foreach($communes as $commune) {
            $departement = $this->repository->find($commune['dpt']);
            if (!is_null($departement)) {
                $comm = new Commune();
                $comm
                    ->setCodeInsee($commune['insee'])
                    ->setName($commune['name'])
                    ->setCodePostal($commune['codePostal'])
                    ->setCodeCanton($commune['codeCanton'])
                    ->setDepartement($departement);
                $this->entityManager->persist($comm);
                $io->progressAdvance();
            }
        }
        $this->entityManager->flush();
        $io->progressFinish();
        $io->success('Les communes françaises ont été importées correctement.');
    }
}
