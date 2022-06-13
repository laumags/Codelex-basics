<?php
$choice = ['rock', 'paper', 'scissors', 'lizard', 'spock'];
$computerChoice = $choice[array_rand($choice)];
$playerChoice = readline ("Enter your choice (" . implode(', ', $choice) . "): " . PHP_EOL);
$conditions = [
    'rock' => ['scissors', 'lizard'],
    'paper' => ['rock', 'spock'],
    'scissors' => ['paper', 'lizard'],
    'lizard' => ['paper', 'spock'],
    'spock' => ['rock', 'scissors'],
];
echo $playerChoice . ' vs ' . $computerChoice . PHP_EOL;
if ($playerChoice == $computerChoice) {
    echo 'draw' . PHP_EOL;
    exit;
}
if (in_array($computerChoice, $conditions[$playerChoice])) {
    echo 'you won' . PHP_EOL;
    exit;
}
echo 'you lost' . PHP_EOL;

