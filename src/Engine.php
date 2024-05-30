<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startGame(array $question, array $correctAnswer, string $name, string $descriptionGame)
{
    line($descriptionGame);
    $length = count($question);
    for ($i = 0; $i < $length; $i++) {
        line("Question: {$question[$i]}");
        $answer = prompt('Your answer');

        if (mb_strtolower($answer) == $correctAnswer[$i]) {
            line("Correct!");
            continue;
        }
        if (mb_strtolower($answer) != $correctAnswer[$i]) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer[$i]}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
    return;
}
