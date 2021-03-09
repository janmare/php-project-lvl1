<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\ask_name;

/**
 * Base game engine
 *
 * @param $message
 * @param $callback
 *
 * @return void
 */
function baseGame($message, $callback)
{
    $userName = ask_name();
    line($message);
    $correct = true;
    for ($i = 0; $i < 3; $i++) {
        [$questionString, $correctAnswer] = call_user_func($callback);
        $userAnswer = prompt('Question: ' . $questionString, false, PHP_EOL . 'Your answer: ');
        if ($userAnswer == $correctAnswer) {
            line('Correct!');
        } else {
            $correct = false;
            line("%s is wrong answer ;(. Correct answer was %s.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $userName);
            break;
        }
    }

    if ($correct) {
        line("Congratulations, %s!", $userName);
    }
}
