<?php
$min = (int) readline ('Enter min: ');
$max = (int) readline ('Enter max: ');
for ($i = $min; $i <= $max; $i++) {
    $number = range($i, $max);
    $sequence = range($min, ($i - 1));
    if (count($number) == $max - $min + 1) {
        echo implode('', $number) . PHP_EOL;
    } else {
        echo implode('', $number) . implode('', $sequence) . PHP_EOL;
    }
}