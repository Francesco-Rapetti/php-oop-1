<?php
    require_once __DIR__ . '/Movie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $movie1 = new Movie("Star Wars", 1977, "George Lucas", "Action", 121, 5, "A long time ago in a galaxy far, far away...");
        $movie2 = new Movie("The Matrix", 1999, "The Wachowskis", "Action", 136, 5, "A young man who discovers that he is a good man and can change the world");

        echo $movie1 . '<br>';
        echo $movie2 . '<br>';
    ?>
</body>
</html>