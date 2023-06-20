<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include "405.php";
    exit;
}

$email =              $_POST['email'];
$voornaam =           $_POST['voornaam'];
$tussenvoegsel =      $_POST['tussenvoegsel'];
$achternaam =         $_POST['achternaam'];
$mobielnummer =       $_POST['mobielnummer'];
$straatnaam =         $_POST['straatnaam'];
$huisnummer =         $_POST['huisnummer'];
$postcode =           $_POST['postcode'];
$plaatsnaam =         $_POST['plaatsnaam'];
$land =               $_POST['land'];
$rol =                $_POST['rol'];
$geslacht =           $_POST['geslacht'];
$gebruikersnaam =     $_POST['gebruikersnaam'];
$wachtwoord =         $_POST['wachtwoord'];
$begindatum =         date("Y-m-d  H:m:s");
$aantal_mensen =      rand(1, 20);
$afdeling =           $_POST['afdeling'];
$wachtwoord_hash =    password_hash($wachtwoord, PASSWORD_DEFAULT);

require "database.php";

if ($rol == "administrator") {
    $sql = "INSERT INTO admin (begindatum)
    VALUES('$begindatum')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, geslacht, email, gebruikersnaam, wachtwoord, straatnaam, huisnummer, postcode, plaatsnaam, land, mobielnummer , adminID) 
    VALUES('$voornaam','$tussenvoegsel','$achternaam','$geslacht','$email','$gebruikersnaam','$wachtwoord_hash','$straatnaam','$huisnummer','$postcode','$plaatsnaam','$land','$mobielnummer','$id')";
    mysqli_query($conn, $sql);
} elseif ($rol == "manager") {
    $sql = "INSERT INTO manager (aantal_mensen,afdeling)
    VALUES('$aantal_mensen','$afdeling')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, geslacht, email, gebruikersnaam, wachtwoord, straatnaam, huisnummer, postcode, plaatsnaam, land, mobielnummer,managerID) 
    VALUES('$voornaam','$tussenvoegsel','$achternaam','$geslacht','$email','$gebruikersnaam','$wachtwoord_hash','$straatnaam','$huisnummer','$postcode','$plaatsnaam','$land','$mobielnummer', '$id')";
    mysqli_query($conn, $sql);
} elseif ($rol == "regular") {
    $sql = "INSERT INTO regular (begindatum)
    VALUES('$begindatum')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, geslacht, email, gebruikersnaam, wachtwoord, straatnaam, huisnummer, postcode, plaatsnaam, land, mobielnummer,regularID) 
    VALUES('$voornaam','$tussenvoegsel','$achternaam','$geslacht','$email','$gebruikersnaam','$wachtwoord_hash','$straatnaam','$huisnummer','$postcode','$plaatsnaam','$land','$mobielnummer' ,'$id')";
    mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/inloggen.css">
</head>

<body>
    <?php include 'nav.php' ?>
    <h2>Bedankt voor het aanmaken van een account!</h2>
    <?php include 'footer.php' ?>
</body>

</html>