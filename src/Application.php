<?php

namespace Sminnee\ComposerDiff;

class Application extends \Symfony\Component\Console\Application
{
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();

        $commands[] = new DiffCommand();

        return $commands;
    }
}
