<?php
$numbers = array_fill(0, 10, null);

for ($i = 0; $i < 10; $i++) {
$numbers[$i] = rand(0, 100);
}
$copyNumbers = $numbers;

$numbers[count($numbers)-1] = -7;
echo 'array 1: '. implode(',', $numbers) . PHP_EOL;
echo 'array 2: '. implode(',', $copyNumbers) . PHP_EOL;
