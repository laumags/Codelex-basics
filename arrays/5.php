<?php
$player1 = 'X';
$player2 = 'O';
$currentPlayer = $player1;

$board = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-'],
];

function displayBoard(array $board): void
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
}

displayBoard($board);

function winner(string $player, array $board): bool
{
    if ($board[0][0] === $player && $board[0][1] === $player && $board[0][2] === $player) {
        return true;
    }
    if ($board[1][0] === $player && $board[1][1] === $player && $board[1][2] === $player) {
        return true;
    }
    if ($board[2][0] === $player && $board[2][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][0] === $player && $board[1][0] === $player && $board[2][0] === $player) {
        return true;
    }
    if ($board[0][1] === $player && $board[1][1] === $player && $board[2][1] === $player) {
        return true;
    }
    if ($board[0][2] === $player && $board[1][2] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][0] === $player && $board[1][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][2] === $player && $board[1][1] === $player && $board[2][0] === $player) {
        return true;
    }
    return false;
}
$turns = 0;

while ($turns < 9)
{
    echo "it is $currentPlayer `s turn" . PHP_EOL;
    $position = readline('Enter your position (row column): ') . PHP_EOL;
    [$x, $y] = explode(' ', $position);
    $board[$x][$y] = $currentPlayer;
    displayBoard($board);

    if (winner($currentPlayer, $board)) {
        echo "player $currentPlayer has won" . PHP_EOL;
    }
    $currentPlayer = ($currentPlayer === $player1) ? $player2 : $player1;

    $turns++;
}
echo "it`s a draw!" . PHP_EOL;

