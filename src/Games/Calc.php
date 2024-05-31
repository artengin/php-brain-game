<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'What is the result of the expression?';

function start()
{
    startGame(DESCRIPTIONGAME, fn () => generateQuestionAndAnswer());
}
function generateQuestionAndAnswer()
{
    $number1 = rand(1, 20);
    $numberOperand = rand(1, 3);
    $number2 = rand(1, 20);
    switch ($numberOperand) {
        case 1:
            $answer = $number1 + $number2;
            $question = "{$number1} + {$number2}";
            break;
        case 2:
            $answer = $number1 - $number2;
            $question = "{$number1} - {$number2}";
            break;
        case 3:
            $answer = $number1 * $number2;
            $question = "{$number1} * {$number2}";
            break;
        default:
            throw new \Exception('Operand is not selected');
            break;
    }
    return [$question, $answer];
}
