<?php
$n = 10;
$f = 1;
for ($i = $n; $i>= 1; $i--) {
    $f = $f * $i;
}
echo "$n! = $f" . PHP_EOL;