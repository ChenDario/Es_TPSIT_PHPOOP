<?php
    include 'Alunno.php';

    // Creazione degli oggetti Alunno
    $alunno1 = new Alunno("Mario", "Rossi", 20);
    $alunno2 = new Alunno("Luca", "Bianchi", 22);

    // Creazione di un array di oggetti Alunno
    $alunni = [$alunno1, $alunno2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monomaniac+One&display=swap" rel="stylesheet">
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
            // Stampa degli alunni
            foreach ($alunni as $alunno) {
                $alunno->stampa();
            }
        ?>
    </div>
</body>
</html>