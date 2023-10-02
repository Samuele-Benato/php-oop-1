<?php
class TvSeries extends Prodaction
{

    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;


    public function __construct(
        string $title,
        string $author,
        Genre $genre,
        string $plot,
        float $vote,
        int $aired_from_year,
        int $aired_to_year,
        string $number_of_episodes,
        string $number_of_seasons,

    ) {
        parent::__construct($title, $author, $genre, $plot, $vote, );
        $this->first_Episode = $aired_from_year;
        $this->last_Episode = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }

}