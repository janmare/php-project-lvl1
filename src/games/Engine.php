<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class Engine
{
    protected $userName;

    protected $hasWrongAnswer;

    public function askName()
    {
        line('Welcome to the Brain Game!');
        $this->userName = prompt('May I have your name?', false, ' ');
        line("Hello, %s!", $this->userName);
    }

    public function baseGame($questionString, $correctAnswer)
    {
        $userAnswer = prompt('Question: ' . $questionString, false, PHP_EOL . 'Your answer: ');
        if ($userAnswer == $correctAnswer) {
            line('Correct!');
        } else {
            $this->hasWrongAnswer = true;
            line("%s is wrong answer ;(. Correct answer was %s.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $this->userName);
        }
    }
}
