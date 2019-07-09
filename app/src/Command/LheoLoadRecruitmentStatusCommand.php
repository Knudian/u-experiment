<?php declare(strict_types = 1);

namespace App\Command;

use App\Command\Dataset\RecruitmentStatusList;
use App\Entity\RecruitmentStatus;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LheoLoadRecruitmentStatusCommand extends Command
{
    protected static $defaultName = 'lheo:load:recruitment-status';

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
            ->setDescription('Importe les status de recrutement prévus par le standard LHEO')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $dataset = RecruitmentStatusList::VALUES;
        $io->createProgressBar(count($dataset));
        $io->progressStart();
        foreach ($dataset as $item) {
            $rec = new RecruitmentStatus();
            $rec->setName($item);
            $this->entityManager->persist($rec);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Statuts de recrutements importés.');
    }
}
