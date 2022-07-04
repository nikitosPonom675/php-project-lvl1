<?php

namespace Php\Project\Lvl1\Games\Game;

use function Php\Project\Lvl1\Engine\app;

function game()
{
    app("Answer \"yes\" if the number is even, otherwise answer \"no\"", function () {
        $randInt = rand();

        print_r("Question: $randInt\n");

        $GLOBALS['correctAnswer'] = $randInt % 2 == 0 ? "yes" : "no";
    });
}
