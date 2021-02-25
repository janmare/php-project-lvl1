<?php

namespace Brain\Games;

use function cli\line;

class Even extends Engine
{
    public function askEven()
    {
        $this->askName();
        line('Answer "yes" if the number is even, otherwise answer "no".');
        for ($i = 0; $i < 3; $i++) {
            $randomInt = random_int(1, 20);
            $isEven = $randomInt % 2 === 0 ? 'yes' : 'no';
            $this->baseGame($randomInt, $isEven);
            if ($this->hasWrongAnswer) {
                break;
            }
        }
        if (!$this->hasWrongAnswer) {
            line("Congratulations, %s!", $this->userName);
        }
    }
}
