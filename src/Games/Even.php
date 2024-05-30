<?php

namespace BrainGames\Games\Even;

use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'Answer "yes" if the number is even, otherwise answer "no".';

function startEven()
{
    $name = sayHello();
    $questions = [];
    $answers = [];
    $numberOfRounds = 3;
    for ($i = 0; $i < $numberOfRounds; $i++) {
        $number = rand(1, 100);
        $number % 2 === 0 ? $answers[] = "yes" : $answers[] = "no";
        $questions[] = $number;
    }
    startGame($questions, $answers, $name, DESCRIPTIONGAME);
}
