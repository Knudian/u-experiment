<?php

namespace App\Command;

use App\Command\Dataset\RomeList;
use App\Entity\External\CodeRome;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LoadCodeRomeCommand extends Command
{
    protected static $defaultName = 'app:load:code-rome';
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
            ->setDescription('Importe une liste de codes ROME.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $codeList = RomeList::VALUES;
        $io->createProgressBar(count($codeList));
        $io->progressStart();

        foreach ($codeList as $id => $libelle)
        {
            $code = new CodeRome();
            $code
                ->setId($id)
                ->setLibelle($libelle);
            $this->entityManager->persist($code);
            $io->progressAdvance();
        }
        $this->entityManager->flush();
        $io->progressFinish();
        $io->success('La liste des codes ROME a été correctement importée.');
    }
}
