<?php

namespace Brain\Games\gcdGame;

use function cli\prompt;
use function Brain\Engine\newGame;

function gameGCD()
{
    $randomNumber1 = rand(0, 100);
    $randomNumber2 = rand(0, 100);
    $question = "{$randomNumber1} {$randomNumber2}";

    $answer = prompt("Question: " . $question);

    $greatestCommonDivisor = gmp_strval(gmp_gcd($randomNumber1, $randomNumber2));

    return  [$answer, $greatestCommonDivisor];
}

function getTextQuestion(): string
{
    return 'Find the greatest common divisor of given numbers.';
}


function game()
{
    newGame('Brain\Games\gcdGame\gameGCD', getTextQuestion());
}
