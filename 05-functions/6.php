<?php
$array = [2, 5, 10, 10.13, 'vārds'];
function arrayDouble(int $number): int
{
    return $number * 2;
}
for ($i = 0; $i < count($array); $i++)
{
    if (is_integer($array[$i])) {
        echo arrayDouble($array[$i]) . PHP_EOL;
    }
}
