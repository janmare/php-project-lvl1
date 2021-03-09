<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\baseGame;

/**
 * Game
 *
 * @return void
 */
function game()
{
    baseGame('Answer "yes" if given number is prime. Otherwise answer "no".', 'Brain\Games\Prime\getData');
}

/**
 * Returns question and answer
 *
 * @return array
 */
function getData()
{
    $randomInt = random_int(1, 100);
    $isPrime = isPrime($randomInt) ? 'yes' : 'no';

    return [$randomInt, $isPrime];
}

/**
 * Checks is number is prime
 *
 * @param $num
 * @return bool
 */
function isPrime($num)
{
    $bCheck = true;
    $highestIntegralSquareRoot = floor(sqrt($num));
    for ($i = 2; $i <= $highestIntegralSquareRoot; $i++) {
        if ($num % $i == 0) {
            $bCheck = false;
            break;
        }
    }
    return $bCheck;
}
