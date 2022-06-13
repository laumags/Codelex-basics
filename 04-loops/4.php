<?php
$array = [1, 3, 5, 9, 12, 14, 25, 29, 333, 1000];

foreach($array as $number) {
    if($number % 3 === 0)
    echo $number . PHP_EOL;
}
