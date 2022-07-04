<?php
class BankAccount
{
    private string $name;
    private float $balance;
    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }
    public function showUsernameAndBalance(): void
    {
        if ($this->balance < 0) {
            $this->balance = 0 - $this->balance;
            $rounded = number_format($this->balance, 2);
            echo "$this->name, -$$rounded" . PHP_EOL;
        } else {
            $rounded = number_format($this->balance, 2);
            echo "$this->name, $$rounded" . PHP_EOL;
        }
    }
}

$test = new BankAccount("Benson", -17.5);
$test->showUsernameAndBalance();