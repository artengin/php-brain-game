<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\startGame;

const DESCRIPTIONGAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function start()
{
    startGame(DESCRIPTIONGAME, fn () => generateQuestionAndAnswer());
}
function generateQuestionAndAnswer()
{
    $number = rand(1, 100);
    $question = $number;
    $answer = isPrime($number) ? 'yes' : 'no';
    return [$question, $answer];
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
