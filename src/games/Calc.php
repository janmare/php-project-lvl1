<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\baseGame;

/**
 * Game
 *
 * @return void
 */
function game()
{
    baseGame('What is the result of the expression?', 'Brain\Games\Calc\getData');
}

/**
 * Returns question and answer
 *
 * @return array
 */
function getData()
{
    $operationTypes = ['+', '-', '*'];
    $number1 = random_int(1, 20);
    $number2 = random_int(1, 20);
    $operator = $operationTypes[random_int(0, 2)];

    $expression = $number1 . ' ' . $operator . ' ' . $number2;
    switch ($operator) {
        case '-':
            $resultExpression = $number1 - $number2;
            break;
        case '*':
            $resultExpression = $number1 * $number2;
            break;
        case '+':
        default:
            $resultExpression = $number1 + $number2;
            break;
    }

    return [$expression, $resultExpression];
}
