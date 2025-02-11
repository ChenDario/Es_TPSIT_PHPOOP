<?php
    include "Studente.php";
    
    $studente1 = new Studente("Dario", "Chen", 2563);
    $studente2 = new Studente("GIanni", "Xie", 3652);
    $studente3 = new Studente("Adele", "Baccelli", 7899);
    $studente4 = new Studente("Tommaso", "Frediani", 6521);

    $studenti = [$studente1, $studente2, $studente3, $studente4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet">
    
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
            foreach($studenti as $studente){
                echo $studente -> presentati() . "<br><br>";
            }
        ?>
    </div>
</body>
</html>