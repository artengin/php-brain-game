<?php

namespace BrainGames\Even;

use function cli\line;
use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\engine;

function isEven()
{   
    $name = sayHello();
    $questions = [];
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        if ($number % 2 === 0) {
            $answers[] = "yes";
        } else {
            $answers[] = "no";
        }
        $questions[] = $number;
    }
    line('Answer "yes" if the number is even, otherwise answer "no".');
    engine($questions, $answers, $name);
}
