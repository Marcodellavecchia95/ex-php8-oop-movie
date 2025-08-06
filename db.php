<?php

$comedy = new Genre("Commedia", "Fa ridere");

$movies = [
    new Movie("Inception", 2010, "Christopher Nolan", new Genre("Thriller", "Fa ansia")),
    new Movie("Tre uomini e una gamba", 1997, "Massimo Venier", $comedy),
];
