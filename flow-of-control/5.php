<?php
$string = readline('Enter a string: ');
$upperCase = strtoupper($string);
$array = str_split($upperCase);
foreach ($array as $value) {
    if ($value == 'A') {
        $value = '2 ';
    }
    if ($value == 'B') {
        $value = '22 ';
    }
    if ($value == 'C') {
        $value = '222 ';
    }
    if ($value == 'D') {
        $value = '3 ';
    }
    if ($value == 'E') {
        $value = '33 ';
    }
    if ($value == 'F') {
        $value = '333 ';
    }
    if ($value == 'G') {
        $value = '4 ';
    }
    if ($value == 'H') {
        $value = '44 ';
    }
    if ($value == 'I') {
        $value = '444 ';
    }
    if ($value == 'J') {
        $value = '5 ';
    }
    if ($value == 'K') {
        $value = '55 ';
    }
    if ($value == 'L') {
        $value = '555 ';
    }
    if ($value == 'M') {
        $value = '6 ';
    }
    if ($value == 'N') {
        $value = '66 ';
    }
    if ($value == 'O') {
        $value = '666 ';
    }
    if ($value == 'P') {
        $value = '7 ';
    }
    if ($value == 'Q') {
        $value = '77 ';
    }
    if ($value == 'R') {
        $value = '777 ';
    }
    if ($value == 'S') {
        $value = '7777 ';
    }
    if ($value == 'T') {
        $value = '8 ';
    }
    if ($value == 'U') {
        $value = '88 ';
    }
    if ($value == 'V') {
        $value = '888 ';
    }
    if ($value == 'W') {
        $value = '9 ';
    }
    if ($value == 'X') {
        $value = '99 ';
    }
    if ($value == 'Y') {
        $value = '999 ';
    }
    if ($value == 'Z') {
        $value = '9999 ';
    }
    echo $value;
}