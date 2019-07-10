<?php

namespace App\Command;

use App\Command\Dataset\CourseGoalList;
use App\Entity\LHEO\Dicts\ObjectifGeneralFormation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LheoLoadCourseGoalCommand extends Command
{
    protected static $defaultName = 'lheo:load:course-goal';

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
            ->setDescription('Importe les objectifs de formation.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $dataset = CourseGoalList::VALUES;
        $io->createProgressBar(count($dataset));
        $io->progressStart();
        foreach ($dataset as $item) {
            $object = new ObjectifGeneralFormation();
            $object->setName($item);
            $this->entityManager->persist($object);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Objectifs des formations importés.');
    }
}
