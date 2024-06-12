<?php
include 'functions.php';
include 'var.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h2>Lunghezza password</h2>
    <form action="elabora.php" method="GET">
        <input type="number" name="lunghezza">
        <button class="btn btn-primary" type="submit">Crea</button>
    </form>
    <?php

    echo getRandInt($lunghezza, $password, $caratteri)

    ?>
</body>

</html>