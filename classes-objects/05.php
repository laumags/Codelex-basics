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
    public function setDay(string $newDay)
    {
        $this->day = $newDay;
    }
    public function setMonth(string $newMonth)
    {
        $this->month = $newMonth;
    }
    public function setYear(string $newYear)
    {
        $this->year = $newYear;
    }
    public function getDay()
    {
        return $this->day;
    }
    public function getMonth()
    {
       return $this->month;
    }
    public function getYear()
    {
       return $this->year;
    }
    public function DisplayDate()
    {
        echo $this->day . "/" . $this->month . "/" . $this->year . PHP_EOL;
    }
}
$dateTest = new Date("01", "12", "2020");
echo $dateTest->DisplayDate();
echo $dateTest->getDay() . PHP_EOL;
$dateTest->setDay("29");
echo $dateTest->DisplayDate();