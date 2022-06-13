<?php
$n = 100;
$i = 1;
$sum = 0;

while
($i <= $n) {
    $sum += $i;
    $i++;
}
$average = $sum / 100;

echo "The sum of 1 to 100 is $sum" . PHP_EOL;
echo "The average is $average" . PHP_EOL;