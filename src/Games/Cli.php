<?php

namespace Php\Project\Lvl1\Games\Cli;

use function cli\line;
use function cli\prompt;

function baseCli()
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name', false, "? ");
    line("Hello, %s!", $name);
}
