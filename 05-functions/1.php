<?php
function addCodelex(string $word): string{
    return "$word codelex";
}
echo addCodelex('Hello') . PHP_EOL;