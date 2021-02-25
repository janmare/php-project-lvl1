<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class Even extends BaseGame
{
    public function askEven()
    {
        $this->askName();
        line('Answer "yes" if the number is even, otherwise answer "no".');
        $correctInput = true;
        for ($i = 0; $i < 3; $i++) {
            $randomInt = random_int(1, 20);
            $answer = prompt('Question: ' . $randomInt, false, PHP_EOL . 'Your answer: ');
            $isEven = $randomInt % 2 === 0 ? 'yes' : 'no';
            if ($answer === $isEven) {
                line('Correct!');
            } else {
                line("%s is wrong answer ;(. Correct answer was %s.", $answer, $isEven);
                line("Let's try again, %s!", $this->userName);
                $correctInput = false;
                break;
            }
        }
        if ($correctInput) {
            line("Congratulations, %s!", $this->userName);
        }
    }
}
