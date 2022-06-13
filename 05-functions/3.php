<?php
$person = [
    "name" => "Lauma",
    "surname" => "Dziļuma",
    "age" => 25
];

function isAdult(int $a): bool
{
    return $a >= 18;
}
if (isAdult($person["age"])){
    echo "is adult" . PHP_EOL;
} else {
    echo "not adult" . PHP_EOL;
}

