<?php

namespace BrainGames\Cli;

function sayHello()
{
    echo "Welcome to the Brain Game!\n";
    echo "May I have your name?\n";

    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";
}
