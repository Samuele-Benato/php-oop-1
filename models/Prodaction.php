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
        return "<strong> Titolo : </strong> $this->title, <br>
            <strong> Regista : </strong> $this->author, <br>
            $genreString, <br>
            <strong> Trama : </strong> $this->plot, <br>
            <strong> Voto : </strong> $this->vote/5, <br>";
    }

}