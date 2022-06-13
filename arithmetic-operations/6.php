<?php
    for ($i = 1; $i <= 110; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0 && $i % 11 == 0) {
            echo 'CozaLozaWoza' . PHP_EOL;
        }elseif ($i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0 && $i && $i % 11 !== 0) {
            echo 'CozaLozaWoza ';
        } elseif ($i % 3 == 0 && $i % 5 == 0 && $i % 11 == 0) {
            echo 'CozaLoza' . PHP_EOL;
        } elseif ($i % 3 == 0 && $i % 5 == 0 && $i % 11 !== 0) {
            echo 'CozaLoza ';
        } elseif ($i % 3 == 0 && $i % 7 == 0 && $i % 11 == 0) {
            echo 'CozaWoza' . PHP_EOL;
        } elseif ($i % 3 == 0 && $i % 7 == 0 && $i % 11 !== 0) {
            echo 'CozaWoza ';
        }elseif ($i % 5 == 0 && $i % 7 == 0 && $i % 11 == 0) {
            echo 'LozaWoza' . PHP_EOL;
        }elseif ($i % 5 == 0 && $i % 7 == 0 && $i % 11 !== 0) {
            echo 'LozaWoza ';
        } elseif ($i % 3 == 0 && $i % 11 == 0) {
            echo 'Coza' . PHP_EOL;
        } elseif ($i % 3 == 0 && $i % 11 !== 0) {
            echo 'Coza ';
        } elseif ($i % 5 == 0 && $i % 11 == 0) {
            echo 'Loza' . PHP_EOL;
        } elseif ($i % 5 == 0 && $i % 11 !== 0) {
            echo 'Loza ';
        } elseif ($i % 7 == 0 && $i % 11 == 0) {
            echo 'Woza' .PHP_EOL;
        } elseif ($i % 7 == 0 && $i % 11 !== 0) {
            echo 'Woza ';
        } elseif ($i % 11 == 0) {
            echo $i . PHP_EOL;
        } else {
            echo $i . ' ';
        }
    }