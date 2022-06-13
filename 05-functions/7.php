<?php
$person = [
        'name' => 'John',
        'licenses' => ['a', 'b', 'd'],
        'cash' => 1000
    ];

$guns = [
    [
        'license' => 'a',
        'price' => 200,
        'name' => 'pistol'
    ],
    [
        'license' => 'b',
        'price' => 30000,
        'name' => 'machine gun'
    ],
    [
        'license' => 'c',
        'price' => 500,
        'name' => 'automatic rifle'
],
    [
        'license' => 'd',
        'price' => 500,
        'name' => 'handgun'
    ]
];

for($i= 0; $i < count($guns); $i++) {
    if ($guns[$i]['price']<= $person['cash'] && in_array($guns[$i]['license'],$person['licenses']) !== false) {
        echo $person['name'] . ' can buy ' . $guns[$i]['name']. PHP_EOL;
    } else {
        echo $person['name'] . ' cannot buy ' .$guns[$i]['name'] . PHP_EOL;
    }
}
