<?php

namespace BrainGames\games\Prime;

use function cli\line;
use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\engine;

function prime()
{
    $name = sayHello();
    $questions = [];
    $answers = [];
    for ($j = 0; $j < 3; $j++) {
        $number = rand(1, 100);
        $questions[] = $number;
        $answers[] = findAnswer($number);
    }
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    engine($questions, $answers, $name);
}

function findAnswer(int $number)
{
    if ($number === 1) {
        return 'no';
    } elseif ($number === 2) {
        return 'yes';
    }
    $sqrtNumber = sqrt($number);
    for ($i = 2; $i <= $sqrtNumber; $i++) {
        if ($number % $i === 0) {
            return 'no';
        }
    }
    return 'yes';
}
