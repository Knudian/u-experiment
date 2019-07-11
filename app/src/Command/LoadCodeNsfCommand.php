<?php

namespace App\Command;

use App\Command\Dataset\NsfList;
use App\Entity\External\CodeNsf;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class LoadCodeNsfCommand
 * @package App\Command
 */
class LoadCodeNsfCommand extends Command
{
    protected static $defaultName = 'app:load:code-nsf';
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct(null);
        $this->entityManager = $entityManager;
    }

    protected function configure()
    {
        $this
            ->setDescription('Importe une liste de codes NSF.')
        ;
    }

    /**
     * Charge le jeux de donnés de la classe NsfList
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $codeNsfList = NsfList::VALUES;
        $io->createProgressBar(count($codeNsfList));
        $io->progressStart();

        foreach($codeNsfList as $id => $formation)
        {
            $code = new CodeNsf();
            $code
                ->setId($id)
                ->setFormation($formation);
            $this->entityManager->persist($code);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();
        $io->success('La liste des codes NSF a été correctement importée.');
    }
}
