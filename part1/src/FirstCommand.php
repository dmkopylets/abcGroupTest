<?php

declare(strict_types=1);

namespace App;

use App\Data\InputData;
use App\Service\FileOutputHandler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FirstCommand extends Command
{
    public function configure(): void
    {
        $this->setName('app:generate')
            ->setDescription('Creatin CSV file')
            ->setHelp('This command create CSV file from array');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln([
            '<info>======            CSV file bilder Console App                  =====</>',
        ]);
        $filePath = 'output.csv';
        $data = new InputData();
        $doer = new FileOutputHandler($filePath);
        $doer->print($data->get(), $output);
        $output->writeln('<fg=#c0392b>' . 'CSV file created successfully at ' . $filePath . '</>');
        return Command::SUCCESS;
    }
}
