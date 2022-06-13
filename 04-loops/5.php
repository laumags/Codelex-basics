<?php
$lauma = new stdClass();
$lauma->name = 'Lauma';
$lauma->surname = 'Dziļuma';
$lauma->age = 25;
$lauma->birthday = '5.decembris';

$elza = new stdClass();
$elza->name = 'Elza';
$elza->surname = 'Bikova';
$elza->age = 28;
$elza->birthday = '11.augusts';

$persons = [
    $lauma, $elza
];

foreach($persons as $person) {
    echo "$person->name $person->surname $person->age $person->birthday" . PHP_EOL;
}

