<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM user";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <?php include 'nav2.php' ?>

    <table>
        <tr>
            <th>
                <h3>Geslacht</h3>
            </th>
            <th>
                <h3>Gebruikersnaam</h3>
            </th>
            <th>
                <h3>Voornaam</h3>
            </th>
            <th>
                <h3>Tussenvoegsel</h3>
            </th>
            <th>
                <h3>Achternaam</h3>
            </th>
            <th>
                <h3>traatnaam</h3>
            </th>
            <th>
                <h3>Mobielnummer</h3>
            </th>
            <th>
                <h3>Huisnummer</h3>
            </th>
            <th>
                <h3>Postcode</h3>
            </th>
            <th>
                <h3>Plaatsnaam</h3>
            </th>
            <th>
                <h3>Land</h3>
            </th>
            <th>
                <h3>Email</h3>
            </th>
            <th>
                <h3>rol</h3>
            </th>
        </tr>
    
             <?php foreach ($users as $user): ?>

        <tr>  
            <th><?php echo $user["geslacht"] ?></th>
            <th><?php echo $user["gebruikersnaam"] ?></th>
            <th><?php echo $user["voornaam"] ?></th>
            <th><?php echo $user["tussenvoegsel"] ?></th>
            <th><?php echo $user["achternaam"] ?></th>
            <th><?php echo $user["straatnaam"] ?></th>
            <th><?php echo $user["mobielnummer"] ?></th>
            <th><?php echo $user["huisnummer"] ?></th>
            <th><?php echo $user["postcode"] ?></th>
            <th><?php echo $user["plaatsnaam"] ?></th>
            <th><?php echo $user["land"] ?></th>
            <th><?php echo $user["email"] ?></th>
            <th><?php echo $user["rol"] ?></th>
        </tr>
        <?php endforeach; ?>
    </table>
            <?php include 'footer.php' ?>

</body>

</html>