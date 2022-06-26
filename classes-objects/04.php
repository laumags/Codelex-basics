<?php
class Movie
{
    public string $title;
    public string $studio;
    public string $rating;
    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }
    public function getPG(): void
    {
        if (strstr ($this->rating, "PG")) {
            echo $this->title . " rating " . $this->rating;
            echo PHP_EOL;
        }
    }
    public function getMovies()
    {
        echo "with the title " . $this->title . ", the studio " . $this->studio . " and the rating " . $this->rating . PHP_EOL;
    }
}
$casino = new Movie("Casino Royale", "Eon Productions", "PG13");
$glass = new Movie("Glass", "Buena Vista International", "PG13");
$spiderman = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures","PG");
$harryPotter = new Movie("Harry Potter 1", "Warner Bros", "R");
$insideOut = new Movie("Inside Out", "Disney", "U");
echo $casino->getPG() . $glass->getPG() . $spiderman->getPG() . $harryPotter->getPG() . $insideOut->getPG();

echo $casino->getMovies() . $glass->getMovies() . $spiderman->getMovies();
