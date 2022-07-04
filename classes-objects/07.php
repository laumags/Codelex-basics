<?php
class Dog
{
    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;
    public function __construct(string $name, string $sex, Dog $mother = null, Dog $father = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }
    public function fathersName(): string
    {
        if (! $this->father) {
            return "Unknown";
        } else {
            return $this->father->name;
        }
    }
    public function hasSameMotherAs(Dog $otherDog): bool
    {
        return $this->mother === $otherDog->mother;
    }
}

class DogTest
{
    public function run(): void
    {
        $sparky = new Dog ("Sparky", "male");
        $sam = new Dog ("Sam", "male");
        $lady = new Dog ("Lady", "female");
        $molly = new Dog ("Molly", "female");
        $rocky = new Dog ("Rocky", "male", $molly, $sam);
        $max = new Dog ("Max", "male", $lady, $rocky);
        $buster = new Dog ("Buster", "male", $lady, $rocky);
        $coco = new Dog ("Coco", "female", $molly, $buster);

        var_dump($coco->fathersName());
        var_dump($sparky->fathersName());
        var_dump($coco->hasSameMotherAs($rocky));
    }
}

(new DogTest())->run();
