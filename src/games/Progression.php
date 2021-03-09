<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\baseGame;

/**
 * Game
 *
 * @return void
 */
function game()
{
    baseGame('What number is missing in the progression?', 'Brain\Games\Progression\getData');
}

/**
 * Returns question and answer
 *
 * @return array
 */
function getData()
{
    $startPoint = random_int(1, 100);
    $step = random_int(1, 10);
    $hiddenNumber = random_int(0, 9);

    $progressionRow = [$startPoint];
    for ($j = 0; $j < 10; $j++) {
        $progressionRow[] = $progressionRow[$j] + $step;
    }

    $correctAnswer = $progressionRow[$hiddenNumber];
    $progressionRow[$hiddenNumber] = '..';

    $questionString = implode(' ', $progressionRow);

    return [$questionString, $correctAnswer];
}
