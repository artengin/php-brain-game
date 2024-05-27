<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engine($question, $correctAnswer, $name)
{
    for ($i = 0, $l = count($question); $i < $l; $i++) {
        line("Question: {$question[$i]}");
        $answer = prompt('Your answer');
        if (strtolower($answer) == $correctAnswer[$i]) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer[$i]}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
    return;
}