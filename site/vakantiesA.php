<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM bestemming";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$bestemmingen = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['submit'])) {
    $zoekterm = $_POST["zoekveld"];

    if (empty($zoekterm)) {
        header("location: vakantiesA.php");
        exit;
    }

    $sql = "SELECT *
    FROM bestemming
    WHERE bestemming LIKE '%$zoekterm%'
      OR omschrijving LIKE '%$zoekterm%'
      OR startdatum LIKE '%$zoekterm%'
      OR einddatum LIKE '%$zoekterm%'
      OR soort LIKE '%$zoekterm%'
      OR notitie LIKE '%$zoekterm%'
      OR toevoegdatum LIKE '%$zoekterm%';
    ";

    $result = mysqli_query($conn, $sql);

    $bestemmingen = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bestemming.css">
</head>

<body>
    <?php include 'nav.php' ?>

    <section class="search">
        <form class="" method="post">
            <input type="text" name="zoekveld">
            <button type="submit" name="submit">zoek</button>
        </form>
    </section>
    <table>

        <tr>
            <th>
                <h3>bestemming</h3>
            </th>
            <th>
                <h3>omschrijving</h3>
            </th>
            <th>
                <h3>startdatum</h3>
            </th>
            <th>
                <h3>einddatum</h3>
            </th>
            <th>
                <h3>soort</h3>
            </th>
            <th>
                <h3>notitie</h3>
            </th>
            <th>
                <h3>toevoegdatum</h3>
            </th>
            <?php foreach ($bestemmingen as $bestemming) : ?>
        <tr>
            <th><?php echo $bestemming["bestemming"] ?></th>
            <th><?php echo $bestemming["omschrijving"] ?></th>
            <th><?php echo $bestemming["startdatum"] ?></th>
            <th><?php echo $bestemming["einddatum"] ?></th>
            <th><?php echo $bestemming["soort"] ?></th>
            <th><?php echo $bestemming["notitie"] ?></th>
            <th><?php echo $bestemming["toevoegdatum"] ?></th>
        </tr><?php endforeach; ?>
    </table>
    <?php include 'footer.php' ?>
</body>

</html>