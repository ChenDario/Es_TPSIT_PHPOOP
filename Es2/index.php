<?php
    header("Content-Type: application/json");
    include 'Automobile.php';

    // Creazione degli oggetti Automobile
    $auto1 = new Automobile("BMW", 2021, "Series 8 Coupé");
    $auto2 = new Automobile("Lamborghini", 2024, "Temerario");

    // Creazione di un array di oggetti Alunno
    $auto = [$auto1, $auto2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumar+One&display=swap" rel="stylesheet">
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
            echo json_encode($auto);
        ?>
    </div>
</body>
</html>