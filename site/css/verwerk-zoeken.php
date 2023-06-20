<?php

require 'database.php';

$gebruikers = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM user"), MYSQLI_ASSOC);


$zoekterm = $_POST["zoekveld"];

if (empty($zoekterm)) {
    header("location: bekijken-gebruikers.php");
    exit;
}

$sql = "SELECT *
    FROM user
    LEFT JOIN administrator USING (adminID)
    LEFT JOIN manager USING (managerID)
    LEFT JOIN regular USING (regularID)
    WHERE voornaam LIKE '%$zoekterm%'
    OR gebruikersID LIKE '%$zoekterm%'
    OR geslacht LIKE '%$zoekterm%'
    OR email LIKE '%$zoekterm%'
    OR gebruikersnaam LIKE '%$zoekterm%'
    OR straatnaam LIKE '%$zoekterm%'
    OR huisnummer LIKE '%$zoekterm%'
    OR postcode LIKE '%$zoekterm%'
    OR plaatsnaam LIKE '%$zoekterm%'
    OR telefoonnummer LIKE '%$zoekterm%'
    OR mobielnummer LIKE '%$zoekterm%'
    OR regularID LIKE '%$zoekterm%'
    OR managerID LIKE '%$zoekterm%'
    OR adminID LIKE '%$zoekterm%'
    OR begindatum LIKE '%$zoekterm%'
    OR afdeling LIKE '%$zoekterm%'
    OR aantal_mensen LIKE '%$zoekterm%'";


$result = mysqli_query($conn, $sql);

$infogebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inlog.css">
    <title>Document</title>
</head>

<body>
    <table>
        <?php include("nav.php") ?>
        <br>
        <br>
        <br>
        <form action="verwerkzoek.php" method="post">
            <section class="search">
                <input type="text" name="zoekveld">
                <button type="submit">zoek!</button>
        </form>

        <tr>
            <th>gebruikersid</th>
            <th>voornaam</th>
            <th>tussenvoegsels</th>
            <th>achternaam</th>
            <th>geslacht</th>
            <th>email</th>
            <th>gebruikersnaam</th>
            <th>straat</th>
            <th>huisnummer</th>
            <th>postcode</th>
            <th>plaats</th>
            <th>telefoonnummer</th>
            <th>mobielnummer</th>
            <th>regularid</th>
            <th>managerid</th>
            <th>adminid</th>
            <th>indienst</th>
            <th>afdeling</th>
            <th>aantalmensen</th>
            <th>perwaneer</th>
        </tr>
        <tr>
            <?php foreach ($infogebruikers as $infogebruiker) :  ?>
        <tr>
            <td><?php echo $infogebruiker["gebruikersID"] ?></td>
            <td><?php echo $infogebruiker["voornaam"] ?></td>
            <td><?php echo $infogebruiker["tussenvoegsel"] ?></td>
            <td><?php echo $infogebruiker["achternaam"] ?></td>
            <td><?php echo $infogebruiker["geslacht"] ?></td>
            <td><?php echo $infogebruiker["email"] ?></td>
            <td><?php echo $infogebruiker["gebruikersnaam"] ?></td>
            <td><?php echo $infogebruiker["straat"] ?></td>
            <td><?php echo $infogebruiker["huisnummer"] ?></td>
            <td><?php echo $infogebruiker["postcode"] ?></td>
            <td><?php echo $infogebruiker["plaatsnaam"] ?></td>
            <td><?php echo $infogebruiker["telefoonnummer"] ?></td>
            <td><?php echo $infogebruiker["mobielnummer"] ?></td>
            <td><?php echo $infogebruiker["regularID"] ?></td>
            <td><?php echo $infogebruiker["managerID"] ?></td>
            <td><?php echo $infogebruiker["administratorID"] ?></td>
            <td><?php echo $infogebruiker["begindatum"] ?></td>
            <td><?php echo $infogebruiker["afdeling"] ?></td>
            <td><?php echo $infogebruiker["aantal_mensen"] ?></td>
        </tr>
    <?php endforeach ?>
    </table>
    <?php include("footer.php") ?>
</body>

</html>