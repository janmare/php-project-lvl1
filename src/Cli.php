<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

/**
 * @return string
 */
function ask_name()
{
    line('Welcome to the Brain Game!');
    $userName = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $userName);

    return $userName;
}
