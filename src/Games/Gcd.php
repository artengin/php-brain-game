<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'Find the greatest common divisor of given numbers.';

function start()
{
    startGame(DESCRIPTIONGAME, fn () => generateQuestionAndAnswer());
}
function generateQuestionAndAnswer()
{
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    $question = "{$number1} {$number2}";
    $answer = findGcd($number1, $number2);
    return [$question, $answer];
}

function findGcd(int $first, int $second): int
{
    return $second !== 0 ? findGcd($second, $first % $second) : $first;
}
