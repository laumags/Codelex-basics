<?php
$height = (int)readline ('Insert height: ');
$width = ($height - 1) * 8;

for ($i = 0; $i < $height; $i++) {
    echo str_repeat('/', $width / 2 - $i * 4);
    echo str_repeat('*', $i * 8);
    echo str_repeat('\\', $width / 2 - $i * 4);
    echo PHP_EOL;
}