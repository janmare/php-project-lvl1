<?php

namespace Brain\Games;

use function cli\line;

class Progression extends Engine
{
    public function calc()
    {
        $this->askName();
        line('What number is missing in the progression?');

        for ($i = 0; $i < 3; $i++) {
            $startPoint = random_int(1, 100);
            $step = random_int(1, 10);
            $hiddenNumber = random_int(0, 9);

            $progressionRow = [$startPoint];
            for ($j = 0; $j < 10; $j++) {
                $progressionRow[] = $progressionRow[$j] + $step;
            }

            $correctAnswer = $progressionRow[$hiddenNumber];
            $progressionRow[$hiddenNumber] = '..';
            $this->baseGame(implode(' ', $progressionRow), $correctAnswer);
            if ($this->hasWrongAnswer) {
                break;
            }
        }
        if (!$this->hasWrongAnswer) {
            line("Congratulations, %s!", $this->userName);
        }
    }
}
