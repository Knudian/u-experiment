<?php

namespace App\Command;

use App\Command\Dataset\RecruitmentStatusList;
use App\Entity\TypePositionnement;
use App\Entity\RecruitmentStatus;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class LheoLoadPositionningTypeCommand
 * @package App\Command
 */
class LheoLoadPositionningTypeCommand extends Command
{
    protected static $defaultName = 'lheo:load:positionning-type';

    /** @var EntityManagerInterface */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        parent::__construct(null);
    }
    protected function configure()
    {
        $this
            ->setDescription('Importe les positionnements de formation.')
        ;
    }

    /**
     * Charge le jeux de donnés de la classe TypePositionnementList
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $dataset = RecruitmentStatusList::VALUES;
        $io->createProgressBar(count($dataset));
        $io->progressStart();
        foreach ($dataset as $item) {
            $rec = new TypePositionnement();
            $rec->setName($item);
            $this->entityManager->persist($rec);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Typages des positionnement de formation importés.');
    }
}
