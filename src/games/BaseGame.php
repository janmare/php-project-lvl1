<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class BaseGame
{
    protected $userName;

    public function askName()
    {
        line('Welcome to the Brain Game!');
        $this->userName = prompt('May I have your name?', false, ' ');
        line("Hello, %s!", $this->userName);
    }
}