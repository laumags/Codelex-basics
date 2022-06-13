<?php
function checkOddEven (int $a): string {
    if ($a % 2 === 0) {
        echo $a . ' is even number' . PHP_EOL;
        exit('bye!' . PHP_EOL);
    } else {
        echo $a . ' is odd number' . PHP_EOL;
        exit('bye!' . PHP_EOL);
    }
}
echo checkOddEven(6) . PHP_EOL;