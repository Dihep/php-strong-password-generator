<?php

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stronk password generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="passwordGen.php" method="GET">
        <p>Quanto lunga dovrebbe essere la password?</p>
        <input name="lunghezzaPassword" type="number" placeholder="Lunghezza password">
        <button type="submit">Genera password</button>
    </form>

</body>
</html>