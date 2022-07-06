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

    private Player $attacker;
    private Player $defender;

    private ?Player $winner = null;

    public function __construct(Player $attacker, Player $defender)
    {
        $this->attacker = $attacker;
        $this->defender = $defender;

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
    public function determineResult(): void
    {
        if ($this->attacker->getSelection() === $this->defender->getSelection()) {
            return;
        }
        if ($this->attacker->getSelection()->isWeakAgainst($this->defender->getSelection())) {
            $this->winner = $this->defender;
            return;
        }
        $this->winner = $this->attacker;
    }
    public function getWinner(): ?Player
    {
        return $this->winner;
    }
    public function getElements(): array
    {
        return $this->elements;
    }
    public function isTied(): bool
    {
        return is_null($this->winner);
    }
}
class GameSet
{
    private Player $attacker;
    private Player $defender;

    private ?Player $winner = null;
    private ?Player $loser = null;

    private const MAX_WINS = 2;

    private int $attackerWins = 0;
    private int $defenderWins = 0;

    public function __construct(Player $attacker, Player $defender)
    {
        $this->attacker = $attacker;
        $this->defender = $defender;
    }
    public function determineResult(): void
    {
        $isItHuman = "";
        if ($this->attacker->getName() === "Player1" || $this->defender->getName() === "Player1") {
            $isItHuman = readline("Do you want to play? (y/n): ");
        }
        if ($isItHuman === "y") {
            echo "You are Player1" . PHP_EOL;
        }
        while ($this->attackerWins < self::MAX_WINS && $this->defenderWins < self::MAX_WINS)
        {
            $game = new Game($this->attacker, $this->defender);
            $elements = $game->getElements();
            if ($isItHuman === "y" && $this->attacker->getName() === "Player1") {
                foreach($game->getElements() as $key => $element) {
                    echo "[$key] - {$element->getName()}" . PHP_EOL;
                }
                $attackerSelection = (int)readline("{$this->attacker->getName()} select element: ");
                $defenderSelection = array_rand($elements);
                $this->attacker->setSelection($elements[$attackerSelection]);
                $this->defender->setSelection($elements[$defenderSelection]);
            } elseif ($isItHuman === "y" && $this->defender->getName() === "Player1") {
                foreach($game->getElements() as $key => $element) {
                    echo "[$key] - {$element->getName()}" . PHP_EOL;
                }
                $defenderSelection = (int)readline("{$this->attacker->getName()} select element: ");
                $attackerSelection = array_rand($elements);
                $this->attacker->setSelection($elements[$attackerSelection]);
                $this->defender->setSelection($elements[$defenderSelection]);
            } else {
                $attackerSelection = array_rand($elements);
                $defenderSelection = array_rand($elements);
                $this->attacker->setSelection($elements[$attackerSelection]);
                $this->defender->setSelection($elements[$defenderSelection]);
            }

            $game->determineResult();

            if ($game->isTied()) {
                if ($isItHuman === "y") {
                    echo "{$this->attacker->getName()} chose {$this->attacker->getSelection()->getName()}" . PHP_EOL;
                    echo "{$this->defender->getName()} chose {$this->defender->getSelection()->getName()}" . PHP_EOL;
                    echo "it's a tie!" . PHP_EOL;
                } else {
                    continue;
                }
            }
            if ($game->getWinner() === $this->attacker) {
                if ($isItHuman === "y") {
                    echo "{$this->attacker->getName()} chose {$this->attacker->getSelection()->getName()}" . PHP_EOL;
                    echo "{$this->defender->getName()} chose {$this->defender->getSelection()->getName()}" . PHP_EOL;
                    echo "{$this->attacker->getName()} wins!" . PHP_EOL;
                    $this->attackerWins++;
                    echo "{$this->attacker->getName()} has $this->attackerWins points" . PHP_EOL;
                    echo "{$this->defender->getName()} has $this->defenderWins points" . PHP_EOL;
                } else {
                    $this->attackerWins++;
                }
            }
            if ($game->getWinner() === $this->defender) {
                if ($isItHuman=== "y") {
                    echo "{$this->attacker->getName()} chose {$this->attacker->getSelection()->getName()}" . PHP_EOL;
                    echo "{$this->defender->getName()} chose {$this->defender->getSelection()->getName()}" . PHP_EOL;
                    echo "{$this->defender->getName()} wins!" . PHP_EOL;
                    $this->defenderWins++;
                    echo "{$this->attacker->getName()} has $this->attackerWins points" . PHP_EOL;
                    echo "{$this->defender->getName()} has $this->defenderWins points" . PHP_EOL;
                } else {
                    $this->defenderWins++;
                }
            }
        }
        if ($this->attackerWins > $this->defenderWins) {
            $this->winner = $this->attacker;
            $this->loser = $this->defender;
        } else {
            $this->winner = $this->defender;
            $this->loser = $this->attacker;
        }
    }
    public function getWinner(): ?Player
    {
        return $this->winner;
    }
    public function getLoser(): ?Player
    {
        return $this->loser;
    }
    public function getAttacker(): Player
    {
        return $this->attacker;
    }
    public function getDefender(): Player
    {
        return $this->defender;
    }
    public function getAttackerWins(): int
    {
        return $this->attackerWins;
    }
    public function getDefenderWins(): int
    {
        return $this->defenderWins;
    }
}
$game1 = new GameSet(new Player("Player1"), new Player ("Player2"));
$game1->determineResult();

$game2 = new GameSet(new Player("Player3"), new Player ("Player4"));
$game2->determineResult();

$game3 = new GameSet(new Player("Player5"), new Player ("Player6"));
$game3->determineResult();

$game4 = new GameSet(new Player("Player7"), new Player ("Player8"));
$game4->determineResult();

$game5 = new GameSet($game1->getWinner(), $game2->getWinner());
$game5->determineResult();

$game6 = new GameSet($game3->getWinner(), $game4->getWinner());
$game6->determineResult();

$game7 = new GameSet($game5->getWinner(), $game6->getWinner());
$game7->determineResult();

echo PHP_EOL;

echo "-------------------FIRST ROUND---------------------------" . PHP_EOL;

echo "1st game - {$game1->getAttacker()->getName()} ({$game1->getAttackerWins()}) VS - {$game1->getDefender()->getName()} ({$game1->getDefenderWins()}) | winner: {$game1->getWinner()->getName()}" . PHP_EOL;

echo "2nd game - {$game2->getAttacker()->getName()} ({$game2->getAttackerWins()}) VS - {$game2->getDefender()->getName()} ({$game2->getDefenderWins()}) | winner: {$game2->getWinner()->getName()}" . PHP_EOL;

echo "3rd game - {$game3->getAttacker()->getName()} ({$game3->getAttackerWins()}) VS - {$game3->getDefender()->getName()} ({$game3->getDefenderWins()}) | winner: {$game3->getWinner()->getName()}" . PHP_EOL;

echo "4th game - {$game4->getAttacker()->getName()} ({$game4->getAttackerWins()}) VS - {$game4->getDefender()->getName()} ({$game4->getDefenderWins()}) | winner: {$game4->getWinner()->getName()}" . PHP_EOL;

echo "-------------------SEMI FINAL----------------------------" . PHP_EOL;

echo "5th game - {$game5->getAttacker()->getName()} ({$game5->getAttackerWins()}) VS - {$game5->getDefender()->getName()} ({$game5->getDefenderWins()}) | winner: {$game5->getWinner()->getName()}" . PHP_EOL;

echo "6th game - {$game6->getAttacker()->getName()} ({$game6->getAttackerWins()}) VS - {$game6->getDefender()->getName()} ({$game6->getDefenderWins()}) | winner: {$game6->getWinner()->getName()}" . PHP_EOL;

echo "----------------------FINAL------------------------------" . PHP_EOL;

echo "7th game - {$game7->getAttacker()->getName()} ({$game7->getAttackerWins()}) VS - {$game7->getDefender()->getName()} ({$game7->getDefenderWins()}) | winner: {$game7->getWinner()->getName()}" . PHP_EOL;

echo PHP_EOL;

echo "-------------------LEADERBOARD---------------------------" . PHP_EOL;

echo "                 1st - {$game7->getWinner()->getName()}" . PHP_EOL;
echo "                 2nd - {$game7->getLoser()->getName()}" . PHP_EOL;
echo "                 3rd/4th - {$game6->getLoser()->getName()}" . PHP_EOL;
echo "                 3rd/4th - {$game5->getLoser()->getName()}" . PHP_EOL;
echo "                 5th-8th - {$game4->getLoser()->getName()}" . PHP_EOL;
echo "                 5th-8th - {$game3->getLoser()->getName()}" . PHP_EOL;
echo "                 5th-8th - {$game2->getLoser()->getName()}" . PHP_EOL;
echo "                 5th-8th - {$game1->getLoser()->getName()}" . PHP_EOL;