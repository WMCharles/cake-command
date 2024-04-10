<?php

namespace App\Command;

use App\Controller\TextsController;
use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;

class TextCommand extends Command
{
    public function execute(Arguments $args, ConsoleIo $io): int
    {
        $textsController = new TextsController();
        $textsController->index();
        $io->out('Random text file created successfully.');
        return static::CODE_SUCCESS;
    }
}
