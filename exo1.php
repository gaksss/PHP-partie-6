<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoPHP</title>
</head>
<body>
    <h1>Hello World</h1>
    <a href="exo1.php?lastname=Nemare&firstname=Jean">Viens la 
    </a>
    <?php
    if (isset($_GET["lastname"]) && isset($_GET["firstname"] )) {
    $lastName = $_GET["lastname"];
    $firstName = $_GET["firstname"];
    echo "{$lastName} {$firstName}";
} else {
    return;
}
    
    ?>
</body>
</html>