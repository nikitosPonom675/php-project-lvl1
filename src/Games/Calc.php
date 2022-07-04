<?php

namespace Php\Project\Lvl1\Games\Calc;

use function Php\Project\Lvl1\Engine\app;

function calc()
{
    app("What is the result of the expression?", function () {
        $randIntX = rand();
        $randIntY = rand();
        $setMathematicalOperators = ["-", "+", "*"];
        $mathematicalOperator = $setMathematicalOperators[rand(0, 2)];

        print_r("Question: $randIntX $mathematicalOperator $randIntY\n");

        if ($mathematicalOperator == "-") {
            $result = $randIntX - $randIntY;
        } elseif ($mathematicalOperator == "+") {
            $result = $randIntX + $randIntY;
        } else {
            $result = $randIntX * $randIntY;
        }

        $GLOBALS['correctAnswer'] = $result;
    });
}
