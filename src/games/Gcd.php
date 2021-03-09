<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\baseGame;

/**
 * Game
 *
 * @return void
 */
function game()
{
    baseGame('Find the greatest common divisor of given numbers.', 'Brain\Games\Gcd\getData');
}

/**
 * Returns question and answer
 *
 * @return array
 */
function getData()
{
    $number1 = random_int(1, 100);
    $number2 = random_int(1, 100);

    $gcd = gcd($number1, $number2);
    return [$number1 . ' ' . $number2, $gcd];
}

/**
 * Gets gcd
 *
 * @param $a
 * @param $b
 *
 * @return mixed
 */
function gcd($a, $b)
{
    $result = ($a % $b) ? gcd($b, $a % $b) : $b;
    return $result;
}
