<?php
    include "Cane.php";
    $cane = new Cane();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Triodion&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TPSIT Lab 11/02/2025 </title>
</head>
<body>
    <div class="stampa">
        <h1> PHP-OOP </h1>
        <?php
            for($i = 0; $i < 10; $i++){
                echo $cane -> verso() . "<br><br>";
            }
        ?>
    </div>
</body>
</html>