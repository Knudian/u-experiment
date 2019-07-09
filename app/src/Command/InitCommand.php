<?php declare(strict_types = 1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class InitCommand extends Command
{
    protected static $defaultName = 'app:init';

    protected function configure()
    {
        $this
            ->setDescription('Initialise le projet')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $commands = [
            ['command' => 'doctrine:database:create', '--if-not-exists' => true],
            ['command' => 'doctrine:migrations:migrate', '--no-interaction' => true],
            ['command' => 'app:load:regions'],
            ['command' => 'app:load:departements'],
            ['command' => 'app:load:communes'],
            ['command' => 'lheo:load:recruitment-perimeter'],
            ['command' => 'lheo:load:recruitment-status'],
        ];

        $io->createProgressBar(count($commands));
        $io->progressStart();

        foreach ($commands as $item) {
            $command = $this->getApplication()->find($item['command']);
            $commandInput = new ArrayInput($item);
            $command->run($commandInput, $output);
            $io->progressAdvance();
        }

        $io->progressFinish();

        $io->success('Projet initialisé');
    }
}
