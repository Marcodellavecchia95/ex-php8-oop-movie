<?php

require_once("./traits/HasVote.php");

require_once("./models/Genre.php");
require_once("./models/Movie.php");

require_once("./db.php");


$movies[0]->setVote(10);








?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>ex-php8-oop-movie</title>
</head>

<body>

    <div class="container">
        <h1 class="my-5 text-center">Film OOP</h1>
        <div class="row">
            <?php foreach ($movies as $movie) { ?>
                <div class="col">
                    <div class="card">
                        <h2><?php echo $movie->name ?></h2>
                        <p><b>Anno d'uscita: </b><?php echo $movie->date ?></p>
                        <p><b>Regista: </b><?php echo $movie->director ?></p>
                        <p><b>Genere: </b><?php echo $movie->getGenreName() ?></p>
                        <?php if ($movie->vote) echo "<p><b>Vote: </b>$movie->vote</p>"
                        ?>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>