<?php
$fruits = [
    [
        'name' => 'apple',
        'weight' => 10

    ],
    [
        'name' => 'orange',
        'weight' => 20
    ],
    [
        'name' => 'banana',
        'weight' => 10
    ],
];
function shippingCost(int $weight): int {
    if($weight > 10) {
        return 2;
    }else {
        return 1;
    }
}
foreach ($fruits as $fruit)
{
    echo $fruit['name'] . ' ' . $fruit['weight'] . ' kg costs ' . shippingCost($fruit['weight']) . ' euros';


    echo PHP_EOL;
}