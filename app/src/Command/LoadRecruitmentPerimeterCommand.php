<?php

namespace App\Command;

use App\Command\Dataset\RecruitmentPerimeterList;
use App\Entity\RecruitmentPerimeter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LoadRecruitmentPerimeterCommand extends Command
{
    protected static $defaultName = 'lheo:load:recruitment-perimeter';

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
            ->setDescription('Importe les périmètres de recrutement prévus par le standard LHEO')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $dataset = RecruitmentPerimeterList::VALUES;
        $io->createProgressBar(count($dataset));
        $io->progressStart();
        foreach ($dataset as $item) {
            $rec = new RecruitmentPerimeter();
            $rec->setName($item);
            $this->entityManager->persist($rec);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Périmètres de recrutements importés.');
    }
}
