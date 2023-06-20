<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM regular";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$regulars = mysqli_fetch_assoc($result);
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
    <h1 class="h1">Start datum</h1>

    <?php echo $regulars["begindatum"] ?>
    
    <?php include 'footer.php' ?>
</body>

</html>