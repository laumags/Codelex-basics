<?php
$dayNumber = (int) readline ('Enter number 0 - 6: ');
switch ($dayNumber) {
    case 0 :
        echo 'Sunday' . PHP_EOL;
        break;
    case 1 :
        echo 'Monday' . PHP_EOL;
        break;
    case 2 :
        echo 'Tuesday' . PHP_EOL;
        break;
    case 3 :
        echo 'Wednesday' . PHP_EOL;
        break;
    case 4 :
        echo 'Thursday' . PHP_EOL;
        break;
    case 5 :
        echo 'Friday' . PHP_EOL;
        break;
    case 6 :
        echo 'Saturday' . PHP_EOL;
        break;
    default:
        echo 'Not a valid day' . PHP_EOL;
}

if ($dayNumber >=0 && $dayNumber <= 6) {
    if ($dayNumber == 0) {
        echo 'Sunday' . PHP_EOL;
    }
    if ($dayNumber == 1) {
        echo 'Monday' . PHP_EOL;
    }
    if ($dayNumber == 2) {
        echo 'Tuesday' . PHP_EOL;
    }
    if ($dayNumber == 3) {
        echo 'Wednesday' . PHP_EOL;
    }
    if ($dayNumber == 4) {
        echo 'Thursday' . PHP_EOL;
    }
    if ($dayNumber == 5) {
        echo 'Friday' . PHP_EOL;
    }
    if ($dayNumber == 6) {
        echo 'Saturday' . PHP_EOL;
    }
} else {
    echo 'Not a valid day' . PHP_EOL;
}