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
        return "<strong> Titolo : </strong> $this->title <br>
            <strong> Regista : </strong> $this->author <br>
             $genreString <br>
            <strong> Trama : </strong> $this->plot <br>
            <strong> Voto : </strong> $this->vote/10 <br>
            <strong> Uscita : </strong> $this->aired_from_year <br>
            <strong> Ultima Stagione : </strong> $this->aired_to_year <br>
            <strong> N° Episodi : </strong> $this->number_of_episodes <br>
            <strong> N° Stagioni : </strong> $this->number_of_seasons <br>";
    }

}