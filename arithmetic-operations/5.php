<?php
$a = (int)readline('Im thinking of a number between 1-100. Try to guess it. ') . PHP_EOL;
    $random = rand(1, 100);
    if ($a < $random) {
        echo "Sorry, you are too low. I was thinking $random." .PHP_EOL;
    } elseif ($a > $random) {
        echo "Sorry, you are too high. I was thinking $random." . PHP_EOL;
    } else {
        echo "You guessed it! What are the odds?!?";
    }



$correctNumber = rand(1, 100);

$maxAttempts = 3;
$attempt = 0;
echo $correctNumber. PHP_EOL;

while ($attempt < $maxAttempts)
{
    $number = (int)readline ('guess the number: ');
    if ($number === $correctNumber) {
        break;
    }
    if ($number > $correctNumber) {
        echo 'too high';
    }
    if ($number < $correctNumber) {
        echo 'too low';
    }
    $attempt++;
}

echo $attempt === $maxAttempts ? 'sorry' : 'correct';

