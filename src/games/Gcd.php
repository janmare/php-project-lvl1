<?php

namespace Brain\Games;

use function cli\line;

class Gcd extends Engine
{
    public function calc()
    {
        $this->askName();
        line('Find the greatest common divisor of given numbers.');

        for ($i = 0; $i < 3; $i++) {
            $number1 = random_int(1, 100);
            $number2 = random_int(1, 100);

            $this->baseGame($number1 . ' ' . $number2, $this->gcd($number1, $number2));
            if ($this->hasWrongAnswer) {
                break;
            }
        }
        if (!$this->hasWrongAnswer) {
            line("Congratulations, %s!", $this->userName);
        }
    }

    public function gcd($a, $b) {
        $result = ($a % $b) ? $this->gcd($b,$a % $b) : $b;
        return $result;
    }
}