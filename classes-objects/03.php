<?php

class FuelGauge
{
    public int $liters;
    public function __construct(int $liters)
    {
    $this->liters = $liters;
    }
    public function fuelGauge(int $l)
    {
        if ($l <= 70)
            $this->liters = $l;
        else
            $this->liters = 70;
    }
    public function getLiters()
    {
        return $this->liters;
    }
    public function incrementLiters()
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

class Odometer extends FuelGauge
{
    public int $mileage;
    public int $setPoint;

    public function __construct(int $mileage, int $fuelGauge)
    {
        $this->mileage = $mileage;
        $this->setPoint = $mileage;
        $this->fuelGauge = $fuelGauge;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function incrementLiters()
    {
        if ($this->mileage < 999999) {
            $this->mileage++;
        } else {
            $this->mileage = 0;
        }
        $this->mileage = $this->mileage + 1000000;
        if (($this->mileage - $this->setPoint) >= 10) {
            $this->fuelGauge = $fuelGauge->liters--;
            $this->setPoint = $this->mileage;
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

