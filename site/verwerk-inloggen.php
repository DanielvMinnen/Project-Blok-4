<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include "405.php";
    exit;
}

$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

require 'database.php';

$sql = "SELECT * FROM user WHERE email = '$email' ";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if (!is_array($user)) {
    header("location: inloggen.php");
    exit;
}

var_dump($user);
if (password_verify($wachtwoord, $user['wachtwoord'])) {
    session_start();

    $_SESSION['isIngelogd'] = true;
    $_SESSION['voornaam'] = $user['voornaam'];
    $_SESSION['rol'] = $user['rol'];
    $_SESSION['gebruikersID'] = $user['gebruikersID'];

    if (!is_null($user['adminID'])) {
        header("location: admin-dashboard.php");
    } elseif (!is_null($user['managerID'])) {
        header("location: manager-dashboard.php");
    } elseif (!is_null($user['regularID'])) { 
        header("location: regular-dashboard.php"); 
    } else {
        // If none of the above conditions match, redirect to a default dashboard page or display an error message.
        header("location: default-dashboard.php");
    }
}
