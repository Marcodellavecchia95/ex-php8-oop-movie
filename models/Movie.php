<?php
class Movie
{
    public $name;
    public $date;
    public $director;
    public Genre $genre;

    use HasVote;

    function __construct($name, $date, $director, Genre $genre)
    {
        $this->name = $name;
        $this->date = $date;
        $this->director = $director;
        $this->genre = $genre;
    }



    public function getGenreName()
    {
        return $this->genre->getName();
    }
}
