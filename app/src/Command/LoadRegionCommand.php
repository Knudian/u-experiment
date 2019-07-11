<?php

declare(strict_types=1);

namespace App\Command;

use App\Command\Dataset\RegionList;
use App\Entity\Administrative\Country;
use App\Entity\Administrative\Region;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class LoadRegionCommand
 * @package App\Command
 */
class LoadRegionCommand extends Command
{
    protected static $defaultName = 'app:load:regions';


    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        parent::__construct(null);
    }

    protected function configure()
    {
        $this
            ->setDescription('Importe les régions françaises.');
    }

    /**
     * Charge le jeux de donnés de la classe RegionList
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $regions = RegionList::VALUES;
        $io->createProgressBar(count($regions) + 1);
        $io->progressStart(0);

        $france = new Country();
        $france
            ->setId('FR')
            ->setName('France');
        $this->entityManager->persist($france);

        foreach ($regions as $id => $name) {
            $region = new Region();
            $region
                ->setId($id)
                ->setName($name)
                ->setCountry($france);
            $this->entityManager->persist($region);
            $io->progressAdvance();
        }

        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('La France et ses régions administratives ont été importées.');
    }
}
