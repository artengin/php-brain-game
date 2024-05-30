<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function startPrime()
{
    $name = sayHello();
    $questions = [];
    $answers = [];
    $numberOfRounds = 3;
    for ($j = 0; $j < $numberOfRounds; $j++) {
        $number = rand(1, 100);
        $questions[] = $number;
        isPrime($number) ? $answers[] = 'yes' : $answers[] = 'no';
    }
    startGame($questions, $answers, $name, DESCRIPTIONGAME);
}

function isPrime(int $number)
{
    if ($number === 1) {
        return false;
    }

    if ($number === 2) {
        return true;
    }

    $sqrtNumber = sqrt($number);
    for ($i = 2; $i <= $sqrtNumber; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
