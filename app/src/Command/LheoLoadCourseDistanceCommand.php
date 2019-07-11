<?php declare(strict_types = 1);

namespace App\Command;

use App\Command\Dataset\CourseDistanceList;
use App\Entity\LHEO\Dicts\ModaliteEnseignement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class LheoLoadCourseDistanceCommand
 * @package App\Command
 */
class LheoLoadCourseDistanceCommand extends Command
{
    protected static $defaultName = 'lheo:load:course-distance';

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
            ->setDescription('Importe les modalités de distance des formations.')
        ;
    }

    /**
     * charge le jeux de donnés de la classe CourseDistanceList
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $dataset = CourseDistanceList::VALUES;
        $io->createProgressBar(count($dataset));
        $io->progressStart();
        foreach ($dataset as $item) {
            $object = new ModaliteEnseignement();
            $object->setName($item);
            $this->entityManager->persist($object);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Typages de la distance de formation importés.');
    }
}
