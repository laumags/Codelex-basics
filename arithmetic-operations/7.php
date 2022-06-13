<?php
$a = -9.81;
$t = 10;
$vI = 0;
$xI = 0;
$x = 0.5 * $a * pow($t, 2) + $vI * $t + $xI;

echo $x . PHP_EOL;
