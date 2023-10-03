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
        array $genre,
        string $plot,
        float $vote,
        int $aired_from_year,
        int $aired_to_year,
        int $number_of_episodes,
        int $number_of_seasons,

    ) {
        parent::__construct($title, $author, $genre, $plot, $vote, );
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }
    public function getDetails()
    {

        return parent::getDetails() . "
            <strong> Uscita : </strong> $this->aired_from_year <br>
            <strong> Ultima Stagione : </strong> $this->aired_to_year <br>
            <strong> N° Episodi : </strong> $this->number_of_episodes <br>
            <strong> N° Stagioni : </strong> $this->number_of_seasons <br>";
    }

}