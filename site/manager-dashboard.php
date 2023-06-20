<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM manager";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$managers = mysqli_fetch_assoc($result);
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

    <table>
        <tr>
            <th>
                <h3>aantal mensen</h3>
            </th>
            <th>
                <h3>afdeling</h3>
            </th>
        </tr>
        <tr>
            <th><?php echo $managers["aantal_mensen"] ?></th>
            <th><?php echo $managers["afdeling"] ?></th>
        </tr>
    </table>
    <?php include 'footer.php' ?>
</body>

</html>