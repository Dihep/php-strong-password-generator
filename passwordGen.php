<?php

$numeroCaratteri = $_GET["lunghezzaPassword"] ?? "0";

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
        <p id="titolo">La password generata (lunga <?=$numeroCaratteri?> caratteri) è:</p>
        <p id="password"><?=$numeroCaratteri?></p>

    </div>    
</body>
</html>