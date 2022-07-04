<?php
class SavingsAccount
{
    private float $startingBalance;
    private int $interestRate;
    private int $months;
    public function __construct()
    {
        $this->startingBalance = (float)readline("How much money is in the account?: ");
        $this->interestRate = (int)readline("Enter the annual interest rate: ");
        $this->months = (int)readline("How long has the account been opened?: ");
    }
    public function moneyWithdrawn(): float
    {
        $withdrawnMoney = 0;
        for ($i = 1; $i <= $this->months; $i++){
            $withdrawn = (int)readline("Enter amount withdrawn for month $i: ");
            $withdrawnMoney += $withdrawn;
        }
        return $withdrawnMoney;
    }
    public function moneyDeposited(): float
    {
        $depositedMoney = 0;
        for ($i = 1; $i <= $this->months; $i++){
            $deposited = (int)readline("Enter amount deposited for month $i: ");
            $depositedMoney += $deposited;
        }
        return $depositedMoney;
    }
    public function monthlyInterest(): float
    {
        return $this->interestRate / 12 * $this->startingBalance + $this->startingBalance;
    }
    public function endingBalance(): float
    {
        return $this->startingBalance + $this->moneyDeposited() - $this->moneyWithdrawn() + $this->monthlyInterest();
    }
    public function displayResults(): void
    {
        echo "Total deposited: $" . round($this->moneyDeposited(),2) . PHP_EOL;
        echo "Total withdrawn: $" . round($this->moneyWithdrawn(), 2) . PHP_EOL;
        echo "Interest earned: $" . round($this->monthlyInterest(), 2) . PHP_EOL;
        echo "Ending balance: $" . round($this->endingBalance(), 2) . PHP_EOL;
    }
}
$test = new SavingsAccount();
$test->displayResults();
