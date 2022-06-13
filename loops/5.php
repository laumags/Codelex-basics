<?php
echo 'Welcome to piglet!' . PHP_EOL;
$result = 0;
do {
    $dice = rand(1, 6);
    echo 'You rolled a ' . $dice . '!' . PHP_EOL;
    if ($dice == 1) {
        break;
    }
    $result = $result + $dice;
    $choice = readline ('Roll again (yes, no)? ');
} while ($choice == 'yes');
if ($dice == 1) {
    echo 'You got 0 points!' . PHP_EOL;
} else {
    echo 'You got ' . $result . ' points!' . PHP_EOL;
}