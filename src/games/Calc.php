<?php

namespace Brain\Games;

use function cli\line;

class Calc extends Engine
{
    public function calc()
    {
        $this->askName();
        line('What is the result of the expression?');

        $operations = ['+', '-', '*'];

        for ($i = 0; $i < 3; $i++) {
            $number1 = random_int(1, 20);
            $number2 = random_int(1, 20);
            $operator = $operations[random_int(0, 2)];

            $expression = $number1 . ' ' . $operator . ' ' . $number2;

            switch ($operator) {
                case '+':
                    $resultExpression = $number1 + $number2;
                    break;
                case '-':
                    $resultExpression = $number1 - $number2;
                    break;
                case '*':
                    $resultExpression = $number1 * $number2;
                    break;
            }

            $this->baseGame($expression, $resultExpression);
            if ($this->hasWrongAnswer) {
                break;
            }
        }
        if (!$this->hasWrongAnswer) {
            line("Congratulations, %s!", $this->userName);
        }
    }
}
