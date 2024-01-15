<?php
    require_once __DIR__ . '/data.php';
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
        foreach ($movies as $movie) {
            echo '<hr>';
            
            echo $movie . ' - ';
            echo $movie->getGenre();
            
            echo '<hr>';

            var_dump($movie);
        }
    ?>
</body>
</html>