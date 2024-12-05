<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoPHP</title>
</head>

<body>
    <h1>Hello World</h1>
    <a href="exo4.php?language=PHP&server=LAMP">Viens la
    </a>
    <?php
   if (isset($_GET["language"]) && isset($_GET["server"])){
    $language = $_GET["language"];
    $server = $_GET["server"];
    echo $language . " " . $server ;
   } else{
    die ("Fonctionne pas");
   }
    ?>
</body>

</html>