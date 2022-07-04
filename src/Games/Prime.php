<?php

namespace Php\Project\Lvl1\Games\Prime;

use function Php\Project\Lvl1\Engine\app;

function prime()
{
    app("Answer \"yes\" if given number is prime. Otherwise answer \"no\".", function() {
        $randInt = rand();

        print_r("Question: $randInt\n");

        $GLOBALS['correctAnswer'] = "yes";

        if ($randInt == 1) {
            $GLOBALS['correctAnswer'] = "no";
        } elseif ($randInt % 2 == 0 && $randInt != 2) {
            $GLOBALS['correctAnswer'] = "no";
        } elseif ($randInt % 3 == 0 && $randInt != 3) {
            $GLOBALS['correctAnswer'] = "no";
        } elseif ($randInt % 5 == 0 && $randInt != 5) {
            $GLOBALS['correctAnswer'] = "no";
        }
    });
}
