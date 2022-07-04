<?php

class Application
{
    private VideoStore $store;
    public function __construct()
    {
        $this->store = new VideoStore();
    }
    public function run(): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!" . PHP_EOL;
                    die;
                case 1:
                    $this->addVideo();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you.." . PHP_EOL;
            }
        }
    }

    private function addVideo()
    {
        $videoTitle = readline("Enter video title: ");
        $this->store->add(new Video($videoTitle));
    }

    private function rentVideo()
    {
        $this->listInventory();
        /** @var Video[] $inventory */
        $inventory = $this->store->inventory();
        $selectedNumber = (int)readline("Enter video number: ");
        $selectedVideo = $inventory[$selectedNumber];
        $selectedVideo->checkOut();
    }

    private function returnVideo()
    {
        $this->listInventory(false);
        /** @var Video[] $inventory */
        $inventory = $this->store->inventory(false);
        if (empty($inventory)) return;
        $selectedNumber = (int)readline("Enter video number: ");
        $selectedVideo = $inventory[$selectedNumber];
        $selectedVideo->checkIn();
        $rating = (float)readline("Enter rating: ");
        $selectedVideo->receiveRating($rating);
    }

    private function listInventory(bool $inStore = true): void
    {
        foreach ($this->store->inventory($inStore) as $number => $video)
        {
            /** @var Video $video */
            echo "[$number] - {$video->getTitle()} / {$video->averageRating()}" . PHP_EOL;
        }
    }
}

class VideoStore
{
    private array $videos = [];
    public function add(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function inventory(bool $inStore = true): array
    {
        return array_filter($this->videos, function (Video $video) use ($inStore) {
            return $inStore ? $video->hasInStore() : ! $video->hasInStore();
        });
    }
}

class Video
{
    private string $title;
    private bool $inStore;
    private array $ratings = [];

    public function __construct(string $title, bool $inStore = true)
    {
        $this->title = $title;
        $this->inStore = $inStore;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function checkOut(): void
    {
        $this->inStore = false;
    }
    public function checkIn(): void
    {
        $this->inStore = true;
    }
    public function hasInStore(): bool
    {
        return $this->inStore;
    }
    public function receiveRating(float $rating)
    {
        $this->ratings[] = $rating;
    }
    public function averageRating(): float
    {
        if (count($this->ratings) === 0) return 0;
        return array_sum($this->ratings) / count($this->ratings);
    }
}

$app = new Application();
$app->run();