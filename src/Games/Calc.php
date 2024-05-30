<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'What is the result of the expression?';

function calc()
{
    $name = sayHello();
    $questions = [];
    $answers = [];
    $numberOfRounds = 3;
    for ($i = 0; $i < $numberOfRounds; $i++) {
        $number1 = rand(1, 20);
        $numberOperand = rand(1, 3);
        $number2 = rand(1, 20);

        switch (true) {
            case $numberOperand === 1:
                $answers[] = $number1 + $number2;
                $questions[] = "{$number1} + {$number2}";
                break;
            case $numberOperand === 2:
                $answers[] = $number1 - $number2;
                $questions[] = "{$number1} - {$number2}";
                break;
            case $numberOperand === 3:
                $answers[] = $number1 * $number2;
                $questions[] = "{$number1} * {$number2}";
                break;
            default:
                $answers[] = $number1 - $number2;
                $questions[] = "{$number1} - {$number2}";
                break;
        }
    }
    startGame($questions, $answers, $name, DESCRIPTIONGAME);
}
