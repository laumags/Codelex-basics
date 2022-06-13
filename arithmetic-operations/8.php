<?php
$employee = [
    [
        "name" => "Employee1",
        "basePay" => 7.50,
        "hours" => 35],
    [
        "name" => "Employee2",
        "basePay" => 8.20,
        "hours" => 47],
    [
        "name" => "Employee3",
        "basePay" => 10.00,
        "hours" => 73],
];

for($i= 0; $i < count($employee); $i++)
    if ($employee[$i]["basePay"] < 8.00) {
        echo 'Employees must be paid at least $8.00 an hour.' . PHP_EOL;
    } elseif ($employee[$i]["hours"] > 60) {
        echo 'Employees cannot work more than 60 hours in a week.' .PHP_EOL;
    } elseif ($employee[$i]["basePay"] >= 8.00 && $employee[$i]["hours"] <= 40) {
        echo $employee[$i]["name"] . ' salary is:' . $employee[$i]["basePay"] * $employee[$i]["hours"] . PHP_EOL;
    } elseif ($employee[$i]["basePay"] >= 8.00 && $employee[$i]["hours"] > 40) {
        echo $employee[$i]["name"] . ' salary is: $' .
            ($employee[$i]["basePay"] * 40 +
            ($employee[$i]["basePay"] * 1.5 * ($employee[$i]["hours"] - 40))). PHP_EOL;
    }