<?php
$desiredSum = (int)readline ('Enter desired sum (2 - 12): ');
do {
    $firstNum = rand(1, 6);
    $secondNum = rand(1, 6);
    $sum = $firstNum + $secondNum;
    echo $firstNum . ' and ' . $secondNum . ' = ' . $sum . PHP_EOL;
} while ($sum !== $desiredSum);

