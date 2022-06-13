<?php
$firstNum = (int) readline ("Input the 1st number: ") . PHP_EOL;
$secondNum = (int) readline ("Input the 2nd number: ") . PHP_EOL;
$thirdNum = (int) readline ("Input the 3rd number: ") . PHP_EOL;

$numbers = [$firstNum, $secondNum, $thirdNum];
sort($numbers, SORT_NUMERIC);
echo end($numbers);