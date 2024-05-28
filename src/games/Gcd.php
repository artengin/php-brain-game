<?php

namespace BrainGames\games\Gcd;

use function cli\line;
use function BrainGames\Cli\sayHello;
use function BrainGames\Engine\engine;

function gcd()
{
    $name = sayHello();
    $questions = [];
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        if ($number1 < $number2) {
            $temp = $number1;
            $number1 = $number2;
            $number2 = $temp;
        }
        $questions[] = "{$number1} {$number2}";
        $resultat = 0;
        do {
            $divisionResult = $number1 / $number2;
            $remainder = $number1 - ($number2 * floor($divisionResult));
            if (gettype($divisionResult) === "integer") {
                $answers[] = $number2;
                break;
            } elseif ($remainder == 0) {
                $answers[] = $resultat;
                break;
            }
            $resultat = $remainder;
            $number1 = $number2;
            $number2 = $remainder;
        } while ($resultat != 0);
    }
    line('Find the greatest common divisor of given numbers.');
    engine($questions, $answers, $name);
}
