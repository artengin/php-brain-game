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
        $resultat = [];
        $start = rand(0, 50);
        $step = rand(3, 50);
        for ($i = 0; $i < 10; $i++) {
            $resultat[] = $start + $step * $i;
        }
        $hiddenElement = array_rand($resultat);
        $answers[] = $resultat[$hiddenElement];
        $resultat[$hiddenElement] = '..';
        $questions[] = implode(' ', $resultat);
    }
    line('What number is missing in the progression?');
    engine($questions, $answers, $name);
}
