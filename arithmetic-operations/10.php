<?php
echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$choice = (int)readline("Enter your choice (1-4) : ");

if ($choice == 1) {
    $circleRadius = readline("Enter circle’s radius: ");
    if ($circleRadius >= 0) {
        echo 'Area of a circle is ' . $circleArea = pi() * $circleRadius * 2 . PHP_EOL;
    } else {
        echo 'Radius of a circle can’t be a negative number.';
    }
} elseif ($choice == 2) {
    $rectangleLength = readline('Enter rectangle’s length: ');
    $rectangleWidth = readline('Enter rectangle’s width: ');
    if ($rectangleLength >= 0 && $rectangleWidth >= 0) {
        echo 'Area of a rectangle is ' . $rectangleArea = $rectangleLength * $rectangleWidth . PHP_EOL;
    } else {
        echo 'Length and/or width of a rectangle can’t be a negative number.' . PHP_EOL;
    }
} elseif ($choice == 3) {
    $triangleBase = readline('Enter a length of a triangle’s base: ');
    $triangleHeight = readline('Enter a triangle’s height: ');
    if ($triangleBase >= 0 && $triangleHeight >= 0) {
        echo 'Area of a triangle is ' . $triangleArea = $triangleBase * $triangleHeight * 0.5. PHP_EOL;
    } else {
        echo 'Base and/or height of a triangle can’t be a negative number.';
    }
} elseif ($choice == 4) {
    exit('done' . PHP_EOL);
} else {
    echo 'You have to enter a number inside the range of 1 through 4' . PHP_EOL;
}