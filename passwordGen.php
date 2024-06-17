<?php

$numeroCaratteri = $_GET["lunghezzaPassword"] ?? "0";
$sceltaCaratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <p id="titolo">La password generata (lunga <?= $numeroCaratteri ?> caratteri) è:</p>
        <p id="password"><?php
            $password = "";
            $max = strlen($sceltaCaratteri) - 1;
            for ($i = 0; $i < $numeroCaratteri; $i++) {
                $randomChar = rand(0, $max);
                $password[$i] = $sceltaCaratteri[$randomChar];
            }
            echo $password;
        ?></p>

    </div>
</body>

</html>