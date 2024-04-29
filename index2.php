<?php

$name = $_POST['name'];
$password = $_POST['password'];
$criptata = str_repeat("*", strlen($password));
// Lunghezza della variabile $name
$lunghezza_nome = strlen($name);

// Lunghezza della variabile $password
$lunghezza_password = strlen($password);
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
        Name:
        <?php echo $name. " ".$lunghezza_nome ?>
    </h2>
    <h2>
        Password:
        <?php echo $criptata. " " .$lunghezza_password ?>
    </h2>
</body>
</html>