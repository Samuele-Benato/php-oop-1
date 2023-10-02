<?php
class Prodaction
{
    public $title;
    public $author;
    public $genre;
    public $plot;
    public $vote;


    public function __construct(
        string $title,
        string $author,
        Genre $genre,
        string $plot,
        float $vote,
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->plot = $plot;
        $this->vote = $vote;
    }

}