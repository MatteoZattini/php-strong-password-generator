<?php 
$lunghezza = $_GET["lunghezza"]; 
$password = $_GET["password"] ?? "";


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
    <?php 
        for ($i = 0; $i <= $lunghezza - 1; $i++) { 
            $password = $password . "x";
            
        }
        echo $password
    
    ?>
</body>
</html>