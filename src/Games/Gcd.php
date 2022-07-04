<?php

namespace Php\Project\Lvl1\Games\Gcd;

use function Php\Project\Lvl1\Engine\app;

function functionGcd(int $a, int $b)
{
    return ($a % $b != 0) ? functionGcd($b, $a % $b) : $b;
}

function gcd()
{
    app("Find the greatest common divisor of given numbers.", function () {
        $firstNum = rand();
        $twoNum = rand();

        print_r("Question: $firstNum $twoNum\n");

        $GLOBALS['correctAnswer'] = functionGcd($firstNum, $twoNum);
    });
}
