<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'Find the greatest common divisor of given numbers.';

function gcd()
{
    $name = sayHello();
    $questions = [];
    $answers = [];
    $numberOfRounds = 3;
    for ($i = 0; $i < $numberOfRounds; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $questions[] = "{$number1} {$number2}";
        $answers[] = findGcd($number1, $number2);
    }
    startGame($questions, $answers, $name, DESCRIPTIONGAME);
}

function findGcd(int $first, int $second): int
{
    return $first % $second !== 0 ? findGcd($second, $first % $second) : $second;
}
