<?php
class Movie extends Prodaction
{
    public $published_year;
    public $running_time;

    public function __construct(
        string $title,
        string $author,
        array $genre,
        string $plot,
        float $vote,
        int $published_year,
        string $running_time,

    ) {
        parent::__construct($title, $author, $genre, $plot, $vote, );
        $this->published_year = $published_year;
        $this->running_time = $running_time;

    }
    public function getDetails()
    {
        $genreString = "<strong> Genere : </strong>";

        if (is_array($this->genre) && !empty($this->genre)) {
            foreach ($this->genre as $genre) {
                $genreString .= " $genre, ";
            }

            $genreString = rtrim($genreString, ', ');
        } else {
            $genreString .= "Nessun genere specificato";
        }
        return parent::getDetails() . "
            <strong> Anno : </strong> $this->published_year <br>
            <strong> Durata : </strong> $this->running_time <br>";
    }
}