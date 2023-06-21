<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include "405.php";
    exit;
}

$bestemming      =       $_POST['bestemming'];
$omschrijving    =       $_POST['omschrijving'];
$startdatum      =       $_POST['startdatum'];
$einddatum      =       $_POST['einddatum'];
$soort           =       $_POST['soort'];
$notitie         =       $_POST['notitie'];
$toevoegdatum    =       $_POST['toevoegdatum'];

    $sql = "INSERT INTO bestemming (bestemming, omschrijving, startdatum, einddatum, soort, notitie, toevoegdatum)
    VALUES ('$bestemming', '$omschrijving', '$startdatum', '$einddatum', '$soort', '$notitie', '$toevoegdatum')
    ";
    mysqli_query($conn, $sql);

header("location: vakantiesA.php");
exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'nav.php' ?>
    <h2>Bedankt voor het aanmaken van een vakantie!</h2>
    <?php include 'footer.php' ?>
</body>

</html>