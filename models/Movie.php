<?php
class TvSeries extends Prodaction
{
    public $published_year;
    public $running_time;

    public function __construct(
        string $title,
        string $author,
        Genre $genre,
        string $plot,
        float $vote,
        int $published_year,
        string $running_time,

    ) {
        parent::__construct($title, $author, $genre, $plot, $vote, );
        $this->published_year = $published_year;
        $this->running_time = $running_time;

    }

}