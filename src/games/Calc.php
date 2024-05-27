<?php

namespace BrainGames\Calc;

use function cli\line;
use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\engine;

function calc()
{   
    $name = sayHello();
    $questions = [];
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 20);
        $numberOperand = rand(1, 3);
        $number2 = rand(1, 20);
        if ($numberOperand === 1) {
            $answers[] = $number1 + $number2;
            $questions[] = "{$number1} + {$number2}";
        } elseif ($numberOperand === 2) {
            $answers[] = $number1 - $number2;
            $questions[] = "{$number1} - {$number2}";
        } elseif ($numberOperand === 3) {
            $answers[] = $number1 * $number2;
            $questions[] = "{$number1} * {$number2}";
        }
    }
    line('What is the result of the expression?');
    engine($questions, $answers, $name);
}
