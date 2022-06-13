<?php
$number = (int)readline ('Max value? ') . PHP_EOL;
for ($i = 1; $i <= $number; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0 && $i % 20 == 0) {
        echo 'FizzBuzz' . PHP_EOL;
    } elseif ($i % 3 == 0 && $i % 5 == 0 && $i % 20 !== 0) {
        echo 'FizzBuzz ';
    } elseif ($i % 3 == 0 && $i % 20 == 0) {
        echo 'Fizz' . PHP_EOL;
    } elseif ($i % 3 == 0 && $i % 20 !== 0) {
        echo 'Fizz ';
    } elseif ($i % 5 == 0 && $i % 20 == 0) {
        echo 'Buzz' . PHP_EOL;
    } elseif ($i % 5 == 0 && $i % 20 !== 0) {
        echo 'Buzz ';
    } elseif ($i % 20 == 0) {
        echo $i . PHP_EOL;
    } else {
        echo $i . ' ';
    }
}
