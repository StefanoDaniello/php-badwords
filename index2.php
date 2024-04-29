<?php

$name = $_POST['name'];
$password = $_POST['password'];
$criptata = str_repeat("*", strlen($password));
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
        <?php echo $name; ?>
    </h2>
    <h2>
        Password:
        <?php echo $criptata; ?>
    </h2>
</body>
</html>