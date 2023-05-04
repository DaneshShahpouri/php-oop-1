<?php

class Movie
{
    public $title;
    public $genre;
    public $director;
    public $year;
    public $duration;
    public $star;
    public $isColor;
    public function getColor()
    {

        if ($this->year > 1960) {
            return 'si';
        } else {
            return 'no';
        }
    }

    function __construct(string $title, array $genre, string $director, int $year, string $duration, string $star)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->year = $year;
        $this->duration = $duration;
        $this->star = $star;
        $this->isColor = $this->getColor();
    }
}


?>