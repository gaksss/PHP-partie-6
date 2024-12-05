<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoPHP</title>
</head>

<body>
    <h1>Hello World</h1>
    <a href="exo5.php?week=12">Viens la
    </a>
    <?php
   if (isset($_GET["week"])){
    $week = $_GET["week"];
    echo $week;
   } else {
    die("Marche po");
   }
    ?>
</body>

</html>