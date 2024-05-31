<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'Answer "yes" if the number is even, otherwise answer "no".';

function start()
{
    startGame(DESCRIPTIONGAME, fn () => generateQuestionAndAnswer());
}
function generateQuestionAndAnswer()
{
    $number = rand(1, 100);
    $answer = $number % 2 === 0 ? "yes" : "no";
    $question = $number;
    return [$question, $answer];
}
