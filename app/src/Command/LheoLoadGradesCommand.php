<?php

namespace App\Command;

use App\Command\Dataset\GradeList;
use App\Entity\Grade;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LheoLoadGradesCommand extends Command
{
    protected static $defaultName = 'lheo:load:grades';

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
            ->setDescription('Importe une liste de niveau de formation.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $dataset = GradeList::VALUES;
        $io->createProgressBar(count($dataset));
        $io->progressStart();
        foreach ($dataset as $item) {
            $object = new Grade();
            $object
                ->setLevel($item[0])
                ->setName($item[1]);
            $this->entityManager->persist($object);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Liste des niveaux de formation importée.');
    }
}
