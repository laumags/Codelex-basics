<?php
$number = (int)readline ("Enter positive integer: ");
if ($number >= 0) {
    echo 'the number has ' . strlen((string) $number) .' digits'. PHP_EOL;
} else {
    echo 'number is negative' . PHP_EOL;
}