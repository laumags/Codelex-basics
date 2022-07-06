<?php
class Date
{
    public string $day;
    public string $month;
    public string $year;

    public function __construct (string $day, string $month, string $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    public function setDay(string $newDay): string
    {
       return $this->day = $newDay;
    }
    public function setMonth(string $newMonth): string
    {
        return $this->month = $newMonth;
    }
    public function setYear(string $newYear): string
    {
        return $this->year = $newYear;
    }
    public function getDay(): string
    {
        return $this->day;
    }
    public function getMonth(): string
    {
       return $this->month;
    }
    public function getYear(): string
    {
       return $this->year;
    }
    public function DisplayDate(): void
    {
        echo $this->day . "/" . $this->month . "/" . $this->year . PHP_EOL;
    }
}
$dateTest = new Date("01", "12", "2020");
echo $dateTest->DisplayDate();
echo $dateTest->getDay() . PHP_EOL;
$dateTest->setDay("29");
echo $dateTest->DisplayDate();