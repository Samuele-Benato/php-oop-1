<?php
class Movie
{
    public $title;
    public $author;
    public $year;
    public $genre;
    public $plot;
    public $duration;
    public $vote;


    public function __construct(
        string $title,
        string $author,
        int $year,
        string $genre,
        string $plot,
        string $duration,
        float $vote,
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
        $this->plot = $plot;
        $this->duration = $duration;
        $this->vote = $vote;
    }

}