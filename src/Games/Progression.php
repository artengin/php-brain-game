<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'What number is missing in the progression?';

function progression()
{
    $name = sayHello();
    $questions = [];
    $answers = [];
    $numberOfRounds = 3;
    $progressionLength = 10;
    for ($j = 0; $j < $numberOfRounds; $j++) {
        $result = [];
        $start = rand(0, 50);
        $step = rand(3, 50);
        for ($i = 0; $i < $progressionLength; $i++) {
            $result[] = $start + $step * $i;
        }
        $hiddenElement = array_rand($result);
        $answers[] = $result[$hiddenElement];
        $result[$hiddenElement] = '..';
        $questions[] = implode(' ', $result);
    }
    startGame($questions, $answers, $name, DESCRIPTIONGAME);
}
