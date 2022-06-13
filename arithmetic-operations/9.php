<?php
/** BMI = weight * 703 / height ^ 2 */

$weight = readline('Enter your weight in lbs or kg: ');
$weightUnits = readline('Enter weight units (lbs/kg): ');
$height = readline('Enter your height in inches or cm: ');
$heightUnits = readline('Enter height units (in/cm): ');

if ($weightUnits == 'lbs' && $heightUnits == 'in') {
    $bmi = $weight * 703 / pow($height, 2);
    echo $formattedBmi = number_format($bmi, 2) . PHP_EOL;
} elseif ($weightUnits == 'kg' && $heightUnits == 'cm') {
    $bmi = $weight * 2.2 * 703 / pow($height * 0.4, 2);
    echo $formattedBmi = number_format($bmi, 2). PHP_EOL;
} elseif ($weightUnits == 'lbs' && $heightUnits == 'cm') {
    $bmi = $weight * 703 / pow($height * 0.4, 2);
    echo $formattedBmi = number_format($bmi, 2). PHP_EOL;
} elseif ($weightUnits == 'kg' && $heightUnits == 'in') {
    $bmi = $weight * 2.2 * 703 / pow($height, 2);
    echo $formattedBmi = number_format($bmi, 2). PHP_EOL;
}
if ($formattedBmi >= 18.5 && $formattedBmi <= 25) {
    echo 'Your weight is considered optimal' . PHP_EOL;
} elseif ($formattedBmi < 18.5 ) {
    echo 'You are underweight' . PHP_EOL;
} else {
    echo 'You are overweight' . PHP_EOL;
}
