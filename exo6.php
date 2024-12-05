<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoPHP</title>
</head>

<body>
    <h1>Hello World</h1>
    <a href="exo6.php?building=12&room=101">Viens la
    </a>
    <?php
   if (isset($_GET["building"]) && isset($_GET["room"])){
    $building = $_GET["building"];
$room = $_GET["room"];
echo $building . ' ' . $room;
   } else {
    die("Marche po");
   }
    ?>
</body>

</html>