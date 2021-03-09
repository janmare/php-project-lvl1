<?php

namespace Brain\Games;

use function cli\line;

class Prime extends Engine
{
    public function calc()
    {
        $this->askName();
        line('Answer "yes" if given number is prime. Otherwise answer "no".');

        for ($i = 0; $i < 3; $i++) {
            $randomInt = random_int(1, 100);
            $isPrime = gmp_prob_prime($randomInt) ? 'yes' : 'no';
            $this->baseGame($randomInt, $isPrime);
            if ($this->hasWrongAnswer) {
                break;
            }
        }
        if (!$this->hasWrongAnswer) {
            line("Congratulations, %s!", $this->userName);
        }
    }
}
