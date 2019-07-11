<?php declare(strict_types = 1);

namespace App\Command;

use App\Command\Dataset\FinancerList;
use App\Entity\LHEO\Dicts\Financeur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class LheoLoadFinancersCommand
 * @package App\Command
 */
class LheoLoadFinancersCommand extends Command
{
    protected static $defaultName = 'lheo:load:financers';

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
            ->setDescription('Importe une liste de financeurs de formations.')
        ;
    }

    /**
     * Charge le jeux de donnés de la classe FinancerList
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $dataset = FinancerList::VALUES;
        $io->createProgressBar(count($dataset));
        $io->progressStart();
        foreach ($dataset as $item) {
            $object = new Financeur();
            $object->setName($item);
            $this->entityManager->persist($object);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();

        $io->success('Liste des financeurs importée.');
    }
}
