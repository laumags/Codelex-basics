<?php
function numbers(int $a, int $b): void {
    if ($a === 15 || $b === 15 || $a - $b === 15 || $b - $a === 15 || $a + $b === 15 ){
       echo 'true';
    } else {
       echo 'false';
    }
}
echo numbers(5, 10) . PHP_EOL;