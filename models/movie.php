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
    public function color($year)
    {
        if ($year > 1960) {
            $this->isColor = true;
        } else {
            $this->isColor = false;
        }
    }

    function __construct(string $title, string $genre, string $director, int $year, string $duration, string $star)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->year = $year;
        $this->duration = $duration;
        $this->star = $star;
        $this->isColor = ($this->year < 1965) ? 'no' : 'si';
    }
}
?>