<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;


function isEven($name)
{
    $resultat = 0;
    line('Answer "yes" if the number is even, otherwise answer "no".');
    while (true) {
        $number = rand(1, 100);
        line("Question: {$number}");
        $answer = prompt('Your answer');
        if ($number % 2 === 0) {
            $correctAnswer = "yes";
            $wrongAnswer = "no";
            $resultat++;
        } else {
            $correctAnswer = "no";
            $wrongAnswer = "yes";
            $resultat++;
        }
        $lowerCaseAnswer = strtolower($answer);
        if ($lowerCaseAnswer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$wrongAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        if ($resultat === 3) {
            line("Congratulations, {$name}!");
            return;
        }
    }
}
