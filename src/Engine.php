<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

function app(string $lineAfterGreeting, callable $programLogic)
{
    $count = 0;

    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name', "", "? ");
    line("Hello, %s!", $name);
    line($lineAfterGreeting);

    while (true) {
        $programLogic();

        $answer = prompt("Your answer");

        $correctAnswer = $GLOBALS['correctAnswer'];
        if ($answer == $correctAnswer) {
            line("Correct!");

            $count += 1;
        } else {
            print_r("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'");
            print_r("\nLet's try again, $name!\n");

            break;
        }

        if ($count == 3) {
            line("Congratulations, $name!");

            break;
        }
    }
}
