<?php
class Element
{
    private string $name;
    private array $weaknesses = [];
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
    return $this->name;
    }
    public function addWeakness(Element $element): void
    {
        $this->weaknesses[] = $element;
    }
    public function addWeaknesses(array $elements): void
    {
    foreach ($elements as $element) {
        if (!$element instanceof Element) continue;
        $this->addweakness($element);
        }
    }
    public function isWeakAgainst(Element $element): bool
    {
        return in_array($element, $this->weaknesses);
    }
}

class Player
{
    private string $name;
    private Element $selection;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getSelection(): Element
    {
        return $this->selection;
    }
    public function setSelection(Element $selection): void
    {
        $this->selection = $selection;
    }
}

class Game
{
    /** @var Element[] */
    private array $elements = [];
    public function __construct()
    {
        $this->setup();
    }
    public function setup(): void
    {
        $this->elements = [
            $rock = new Element("rock"),
            $paper = new Element("paper"),
            $scissors = new Element("scissors"),
            $lizard = new Element("lizard"),
            $spock = new Element("spock"),
         ];
        $rock->addWeaknesses([$paper, $spock]);
        $paper->addWeaknesses([$scissors, $lizard]);
        $scissors->addWeaknesses([$rock, $spock]);
        $lizard->addWeaknesses([$rock, $scissors]);
        $spock->addWeaknesses([$paper, $lizard]);
    }
    public function start()
    {
        $attacker = new Player (readline("Enter attacker's name: "));
        $defender = new Player (readline("Enter defender's name: "));
        $this->displayElement();

        $attackerSelection = (int)readline("{$attacker->getName()} select element: ");
        $defenderSelection = (int)readline("{$defender->getName()} select element: ");
        $attacker->setSelection($this->elements[$attackerSelection]);
        $defender->setSelection($this->elements[$defenderSelection]);
    if ($attacker->getSelection() === $defender->getSelection()) {
        echo "it's a tie!" . PHP_EOL;
        exit;
    }
    if ($attacker->getSelection()->isWeakAgainst($defender->getSelection())) {
        echo "{$defender->getName()} has won" . PHP_EOL;
        exit;
    }
    echo "{$attacker->getName()} has won" . PHP_EOL;
    exit;
    }
    private function displayElement(): void
    {
    foreach($this->elements as $key => $element) {
        echo "[$key] - {$element->getName()}" . PHP_EOL;
    }
}
}
$game = new Game;
$game-> start();
