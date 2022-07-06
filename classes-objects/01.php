<?php
class Product
{
    public string $name;
    public float $price;
    public int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }
    public function printProduct(): void
    {
        echo $this->name . ", " . "price " . $this->price . ", " . "amount " . $this->amount . PHP_EOL;
    }
}
$banana = new Product ("Banana", 1.1, 13);
$mouse = new Product ("Logitech mouse", 70.00, 14);
$iPhone = new Product ("iPhone 5s", 999.99, 3);
$epson = new Product ("Epson EB-U05", 440.46, 1);
echo $banana->printProduct();
echo $mouse->printProduct();
echo $iPhone->printProduct();
echo $epson->printProduct();





