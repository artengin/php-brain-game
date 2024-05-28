<?php

namespace BrainGames\games\Progression;

use function cli\line;
use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\engine;

function progression()
{
    $name = sayHello();
    $questions = [];
    $answers = [];
    for ($j = 0; $j < 3; $j++) {
        $resultat = '';
        $temp = 0;
        $step = rand(3, 8);
        $hiddenElement = rand(0, 9);
        for ($i = 0; $i < 10; $i++) {
            $temp += $step;
            if ($hiddenElement === $i) {
                $resultat .= " ..";
                $answers[] = $temp;
            } else {
                $resultat .= " {$temp}";
            }
        }
        $questions[] = $resultat;
    }
    line('What number is missing in the progression?');
    engine($questions, $answers, $name);
}
