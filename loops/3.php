<?php
$firstWord = readline ('Enter first word: ');
$secondWord = readline ('Enter second word: ');
$bothWords = $firstWord . $secondWord;
$dots = '.';
$result = '';
for ($i = 0; $i < 30 - strlen($bothWords); $i++) {
    $result = str_repeat($dots, $i);
};
echo $firstWord . $result . $secondWord . PHP_EOL;
