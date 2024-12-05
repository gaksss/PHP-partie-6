<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoPHP</title>
</head>

<body>
    <h1>Hello World</h1>
    <a href="exo3.php?startDate=2/05/2016&endDate=27/11/2016">Viens la
    </a>
    <?php
   if (isset($_GET["startDate"]) && isset($_GET["endDate"] )) {
$startDate = $_GET["startDate"];
$endDate = $_GET["endDate"];
echo $startDate . " " . $endDate;
   }else {
    die ("Fonctionne pas");
   }
    ?>
</body>

</html>