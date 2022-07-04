<?php

namespace Php\Project\Lvl1\Games\Progression;

use function Php\Project\Lvl1\Engine\app;

function progression()
{
    app("What number is missing in the progression?", function () {
        $startNum = rand();
        $twoNum = rand();

        $d = $twoNum - $startNum;

        $set[0] = $startNum;
        $set[1] = $twoNum;

        for ($i = 2; $i < 10; $i++) {
            $set[$i] = $set[$i - 1] + $d;
        }

        $randI = rand(0, 9);
        $GLOBALS['correctAnswer'] = $set[$randI];

        $set[$randI] = "..";

        $stringSet = implode(" ", $set);
        print_r("Question: $stringSet\n");
    });
}
