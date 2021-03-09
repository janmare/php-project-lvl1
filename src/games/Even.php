<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\baseGame;

/**
 * Game
 *
 * @return void
 */
function game()
{
    baseGame('Answer "yes" if the number is even, otherwise answer "no".', 'Brain\Games\Even\getData');
}

/**
 * Returns question and answer
 *
 * @return array
 */
function getData()
{
    $randomInt = random_int(1, 20);
    $isEven = $randomInt % 2 === 0 ? 'yes' : 'no';

    return [$randomInt, $isEven];
}
