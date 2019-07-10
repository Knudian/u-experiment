<?php declare(strict_types = 1);

namespace App\Command;

use App\Command\Dataset\InOutScheduleList;
use App\Entity\LHEO\Dicts\ModaliteEntreeSortie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LheoLoadInOutSchedulesCommand extends Command
{
    protected static $defaultName = 'lheo:load:in-out-schedules';

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
            ->setDescription('Importe une liste de modalités d\'entrée et sortie de formation.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $dataset = InOutScheduleList::VALUES;
        $io->createProgressBar(count($dataset));
        $io->progressStart();
        foreach ($dataset as $item) {
            $object = new ModaliteEntreeSortie();
            $object->setName($item);
            $this->entityManager->persist($object);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Liste des modalités d\'entrée et sortie de formation importée.');
    }
}
