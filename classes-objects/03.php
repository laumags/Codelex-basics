<?php

class FuelGauge
{
    public int $liters;
    public function __construct(int $liters)
    {
    $this->liters = $liters;
    }
    public function fuelGauge(int $l): void
    {
        if ($l <= 70)
            $this->liters = $l;
        else
            $this->liters = 70;
    }
    public function getLiters(): int
    {
        return $this->liters;
    }
    public function incrementLiters(): void
    {
        if ($this->liters < 70) {
            $this->liters++;
        } elseif ($this->liters > 70) {
            echo "fuel is overflowing!" . PHP_EOL;
            $this->liters--;
        } else {
            echo "out of gas" . PHP_EOL;
        }
    }
};

class Odometer
{
    /** @var FuelGauge*/
    private int $mileage;
    private int $setPoint;
    private int $l;
    private int $falseMileage;
    public function __construct(int $mileage, int $fuelGauge)
    {
        $this->mileage = $mileage;
        $this->setPoint = $mileage;
        $this->l = $fuelGauge;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function incrementMiles(): void
    {
        if ($this->mileage < 999999) {
            $this->mileage++;
        } else {
            $this->mileage = 0;
        }
        $falseMileage = $this->mileage + 1000000;
        if (($falseMileage - $this->setPoint) >= 10) {
            FuelGauge::$liters--;
        }
    }
    public function main()
    {
        $fuel = new FuelGauge(20);
        $odometer = new Odometer(0, $fuel);
        while ($fuel->getLiters() > 0) {
            for ($i = 0; $i < 70; $i++)
            {
                $odometer->incrementLiters();
                echo "Mileage: " . $odometer->getMileage() . PHP_EOL;
                echo "Fuel level: " . $fuel->getLiters() . " liters" . PHP_EOL;
                echo "------------------------------" . PHP_EOL;
            }
        }
        return 0;
    }
};

