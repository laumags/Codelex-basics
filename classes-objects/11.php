<?php
class Account
{
    private string $name;
    private float $balance;
    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function withdrawal(float $withdraw): float
    {
        return $this->balance = $this->balance - $withdraw;
    }
    public function deposit(float $deposit): float
    {
        return $this->balance = $this->balance + $deposit;
    }
    public function transfer(Account $to, float $howMuch): void
    {
        $to->balance += $howMuch;
        $this->balance -= $howMuch;
    }
    public function balance(): float
    {
        return $this->balance;
    }
}
$bartosAccount = new Account("Barto's account", 100.00);
$bartosSwissAccount = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state" . PHP_EOL;
echo $bartosAccount->getName() . " ". $bartosAccount->balance() . PHP_EOL;
echo $bartosSwissAccount->getName() .  " ". $bartosSwissAccount->balance() . PHP_EOL;

$bartosAccount->withdrawal(20);
echo "Barto's account balance is now: " . $bartosAccount->balance() . PHP_EOL;
$bartosSwissAccount->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartosSwissAccount->balance() . PHP_EOL;

echo "Final state" . PHP_EOL;
echo $bartosAccount->getName() . " ". $bartosAccount->balance() . PHP_EOL;
echo $bartosSwissAccount->getName() .  " ". $bartosSwissAccount->balance() . PHP_EOL;

echo PHP_EOL;

$newAccount = new Account("New account", 100.00);
$newAccount->deposit(20.00);
echo $newAccount->getName() . " " . $newAccount->balance() . PHP_EOL;

echo PHP_EOL;

$mattsAccount = new Account("Matt's account", 1000);
$myAccount = new Account("My account", 0);
$mattsAccount->withdrawal(100);
$myAccount->deposit(100);
echo $mattsAccount->getName() . " ". $mattsAccount->balance() . PHP_EOL;
echo $myAccount->getName() .  " ". $myAccount->balance() . PHP_EOL;

echo PHP_EOL;

$A = new Account("A", 100.00);
$B = new Account("B", 0.00);
$C = new Account("C", 0.00);

$A->transfer($B, 50.00);
$B->transfer($C, 25.00);

echo $A->getName() . " " . $A->balance() . PHP_EOL;
echo $B->getName() . " " . $B->balance() . PHP_EOL;
echo $C->getName() . " " . $C->balance() . PHP_EOL;