<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\sayHello;

function startGame(string $descriptionGame, callable $generateQuestionAndAnswer)
{
    $name = sayHello();
    line($descriptionGame);
    $numberOfRounds = 3;
    for ($i = 0; $i < $numberOfRounds; $i++) {
        [$question, $correctAnswer] = $generateQuestionAndAnswer();
        line("Question: {$question}");
        $answer = prompt('Your answer');
        if (mb_strtolower($answer) != $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
    return;
}
