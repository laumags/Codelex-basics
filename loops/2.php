<?php
$i = (int) readline ("Input number you want to multiply: ");
$n = (int) readline ("Input times you want to multiply: ");
$result = $i;
for ($j = 0; $j < ($n); $j++) {
    $result *= $result;
    echo $result . PHP_EOL;
}