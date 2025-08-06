<?php class Movie
{
    public $name;
    public $date;
    public $director;



    function __construct($name, $date, $director)
    {
        $this->name = $name;
        $this->date = $date;
        $this->director = $director;
    }



    public function getMovie()
    {
        return "$this->name,  $this->date,  $this->director";
    }
}

class Genre
{
    public $name;
    public $description;
}

$inception = new Movie("Inception", 2010, "Christopher Nolan");
$tre_uomini_e_una_gamba = new Movie("Tre uomini e una gamba", 1997, "Massimo Venier");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>

<body>
    <?php

    echo $inception->getMovie();
    echo "<br>";
    echo $tre_uomini_e_una_gamba->getMovie(); ?>
</body>

</html>