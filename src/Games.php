<?php

namespace Brain\Games\Games;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

\Brain\Games\Cli\printHelloPromptUser();

\Brain\Games\Engine\newGame(
    '\Brain\Games\answerEvenCli\gameAnswerIsEven',
    \Brain\Games\answerEvenCli\getQuestion()
);

\Brain\Games\Engine\newGame(
    '\Brain\Games\answerIsCorrectExpressionResult\gameCalc',
    \Brain\Games\answerIsCorrectExpressionResult\getQuestion()
);
