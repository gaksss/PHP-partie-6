<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoPHP</title>
</head>

<body>
    <h1>Hello World</h1>
    <a href="exo2.php?lastname=Nemare&firstname=Jean">Viens la
    </a>
    <?php
    if (isset($_GET["age"])) {
        $age = $_GET["age"];
        echo $age;
    } else {
        die ("Il ny a pas d'age");
      
    }

    ?>
</body>

</html>