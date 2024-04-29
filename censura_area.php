<?php

$parola = $_POST['parola'];
$parolaCensurata = $_POST['parolaCensurata'];
$parolaCompleta = str_replace($parolaCensurata, '*', $parola);

$lunghezza_parola = strlen($parola);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        Parola:
        <?php echo $parolaCompleta. " " .$lunghezza_parola ?>
    </h2>
    <p style="color: red;">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["parola"]) || empty($_POST["parolaCensurata"])) {
                    echo "Entrambi i campi devono essere compilati.";
                }
            }
        ?>
    </p>
</body>
</html>