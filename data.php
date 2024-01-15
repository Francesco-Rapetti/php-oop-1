<?php

    require_once __DIR__ . '/Movie.php';

    $movies = [
        new Movie("Star Wars", 1977, "George Lucas", ["Action"], 121, 5, "A long time ago in a galaxy far, far away..."),
        new Movie("The Matrix", 1999, "The Wachowskis", ["Action"], 136, 5, "A young man who discovers that he is a good man and can change the world"),
        new Movie("The Godfather", 1972, "Francis Ford Coppola", ["Drama"], 175, 5, "The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son."),
        new Movie("The Shawshank Redemption", 1994, "Frank Darabont", ["Drama"], 142, 5, "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency."),
        new Movie("Schindler's List", 1993, "Steven Spielberg", ["Drama"], 195, 5, "In German-occupied Poland during World War II, industrialist Oskar van der Berg reclaims ...."),
        new Movie("Christmas Carol", 2009, "Robert Zemeckis", ["Fantasy, Animation"], 96, 5, "A young elf tells a story to his Mistress, accompanied by a dog."),
        new Movie("The Silence of the Lambs", 1991, "Jonathan Demme", ["Thriller, Drama"], 118, 5, "A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer."),
        new Movie("Lord of the Rings", 2001, "Peter Jackson", ["Fantasy"], 178, 5, "A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring.")
    ];