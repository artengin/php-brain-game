<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'What number is missing in the progression?';

function start()
{
    startGame(DESCRIPTIONGAME, fn () => generateQuestionAndAnswer());
}
function generateQuestionAndAnswer()
{
    $result = [];
    $progressionLength = 10;
    $start = rand(0, 50);
    $step = rand(3, 50);
    for ($i = 0; $i < $progressionLength; $i++) {
        $result[] = $start + $step * $i;
    }
    $hiddenElement = array_rand($result);
    $answer = $result[$hiddenElement];
    $result[$hiddenElement] = '..';
    $question = implode(' ', $result);
    return [$question, $answer];
}
