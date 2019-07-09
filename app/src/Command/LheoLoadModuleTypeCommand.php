<?php declare(strict_types = 1);

namespace App\Command;

use App\Command\Dataset\ModuleTypeList;
use App\Command\Dataset\RecruitmentStatusList;
use App\Entity\ModuleType;
use App\Entity\RecruitmentStatus;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LheoLoadModuleTypeCommand extends Command
{
    protected static $defaultName = 'lheo:load:module-types';

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
            ->setDescription('Importe les typages de modules de formation')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $dataset = ModuleTypeList::VALUES;
        $io->createProgressBar(count($dataset));
        $io->progressStart();
        foreach ($dataset as $item) {
            $rec = new ModuleType();
            $rec->setName($item);
            $this->entityManager->persist($rec);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Typages des modules de formation importés.');
    }
}
