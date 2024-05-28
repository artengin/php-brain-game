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
        if ($number === 1) {
            $answers[] = 'no';
            continue;
        } elseif ($number === 2) {
            $answers[] = 'yes';
            continue;
        }
        $sqrtNumber = sqrt($number);
        $temp = null;
        for ($i = 2; $i <= $sqrtNumber; $i++) {
            if ($number % $i === 0) {
                $temp = 'no';
                break;
            }
        }
        $answers[] = $temp ?? 'yes';
    }
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    engine($questions, $answers, $name);
}
