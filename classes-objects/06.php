<?php
class EnergyDrinks
{
    private int $surveyed;
    private float $purchasedEnergyDrinks;
    private float $preferCitrusDrinks;
    public function __construct(int $surveyed, float $purchasedEnergyDrinks, float $preferCitrusDrinks)
    {
        $this->surveyed = $surveyed;
        $this->purchasedEnergyDrinks = $purchasedEnergyDrinks;
        $this->preferCitrusDrinks = $preferCitrusDrinks;
    }
    public function calculateEnergyDrinkers(): float
    {
       return round($this->surveyed * $this->purchasedEnergyDrinks);

    }
    public function calculatePreferCitrus(): float
    {
        return round($this->calculateEnergyDrinkers() * $this->preferCitrusDrinks);
    }
    public function displayResults(): void
    {
        echo "Total number of people surveyed " . $this->surveyed . PHP_EOL;
        echo "Approximately " . $this->calculateEnergyDrinkers(). " bought at least one energy drink" . PHP_EOL;
        echo $this->calculatePreferCitrus() . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL;
    }
}

$test = new EnergyDrinks(12467, 0.14, 0.64);
$test->displayResults();