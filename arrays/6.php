<?php
$words = ['earth', 'mobile', 'miracle', 'string', 'land', 'computer', 'coding', 'place', 'prince', 'horse', 'children',
          'castle', 'powerbank', 'jumper', 'melody', 'piano', 'smile', 'email', 'table', 'money', 'planets', 'bread'];
$random = array_rand($words);
$word = $words[$random];
$length = strlen($word);
$mask = str_pad('', $length, '_');
$mistakes = 0;
$letters = [];
$wrong = [];
$tries = 10;
echo $mask . PHP_EOL;
while ($mistakes < 6 && $tries > 0) {
    $guessed = readline('Enter letter a - z: ');
    $key = strpos($word, $guessed);
    if (strpos($word, $guessed) !== false) {
        $mask[$key] = $word[$key];
        if (!in_array($guessed, $letters)) {
            array_push($letters, $guessed);
        } else {
            echo 'you already chose this letter' . PHP_EOL;
        }
        $tries = $tries - 1;
        echo 'guessed letters: ' . implode(',', $letters) . PHP_EOL;
        echo 'wrong letters: ' . implode(',', $wrong) . PHP_EOL;
        echo 'tries left: ' . $tries . PHP_EOL;
        echo $mask . PHP_EOL;
        if ($word === $mask) {
            echo 'you won' . PHP_EOL;
            break;
        }
    } else {
        if (!in_array($guessed, $wrong)) {
            array_push($wrong, $guessed);
        } else {
            echo 'you already chose this letter' . PHP_EOL;
        }
        echo 'guessed letters: ' . implode(',', $letters) . PHP_EOL;
        echo 'wrong letters: ' . implode(',', $wrong) . PHP_EOL;
        $mistakes = $mistakes + 1;
        $tries = $tries - 1;
        echo 'tries left: ' . $tries . PHP_EOL;
        echo $mask . PHP_EOL;
        if ($tries == 0 || $mistakes == 6){
            echo 'you lost' . PHP_EOL;
            echo 'the word was ' . $word . PHP_EOL;
            break;
        }
        }
    }


