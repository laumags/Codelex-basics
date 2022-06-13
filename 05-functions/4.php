<?php
$person = [
    [
    "name" => "Lauma",
    "surname" => "Dziļuma",
    "age" => 25],
    [
    "name" => "Elza",
    "surname" => "Bikova",
    "age" => 28],
    [
    "name" => "Matilde",
    "surname" => "Bikova",
    "age" => 1],
    [
    "name" => "Kamilla",
    "surname" => "Bikova",
    "age" => 4],
];

function isAdult(int $a): bool
{
    return $a >= 18;
}
for($i= 0; $i < count($person); $i++) {
    if (isAdult($person[$i]["age"])) {
        echo $person[$i]["name"] . ' is an adult' . PHP_EOL;
    } else {
        echo $person[$i]["name"] . ' is not an adult' . PHP_EOL;
    }
}