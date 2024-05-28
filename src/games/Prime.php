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
        switch (true) {
            case $number === 1:
                $answers[] = 'no';
                break;
            case $number === 2:
                $answers[] = 'yes';
                break;
            case $number % 2 === 0:
                $answers[] = 'no';
                break;
            case $number % 5 === 0:
                $answers[] = 'no';
                break;
            case $number % 3 === 0:
                $answers[] = 'no';
                break;
            case $number % 11 === 0:
                $answers[] = 'no';
                break;
            case $number % 7 === 0:
                $answers[] = 'no';
                break;
            case $number % 13 === 0:
                $answers[] = 'no';
                break;
            default:
                $answers[] = 'yes';
        }
    }
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    engine($questions, $answers, $name);
}
