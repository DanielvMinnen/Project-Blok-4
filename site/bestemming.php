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
    <h1>bestemming aanmaken</h1>
    <form action="verwerk-bestemming.php" method="post">
        <ul>
            <li>
                <label for="bestemming">Bestemming</label><br>
                <input type="text" name="bestemming" id="bestemming" placeholder="bestemming">
            </li>
            <li>
                <label for="omschrijving">Omchrijving</label><br>
                <input type="text" name="omschrijving" id="omschrijving" placeholder="omschrijving">
            </li>
            <li>
                <label for="startdatum">Startdatum</label><br>
                <input type="text" name="startdatum" id="startdatum" placeholder="startdatum">
            </li>
        </ul>
        <ul>
            <li>
                <label for="naam">Einddatum</label><br>
                <input type="text" name="einddatum" id="einddatum" placeholder="einddatum">
            </li>
            <li>
                <label for="soort">Soort</label><br>
                <input type="text" name="soort" id="soort" placeholder="soort">
            </li>
            <li>
                <label for="notitie">Notitie</label><br>
                <input type="text" name="notitie" id="notitie" placeholder="notitie">
            </li>
        </ul>
        <ul>
            <li>
                <label for="toevoegdatum">Toevoegdatum</label><br>
                <input type="text" name="toevoegdatum" id="toevoegdatum" placeholder="toevoegdatum">
            </li>
            <li>
                <label for="rol">Rol</label><br>
                <input type="text" name="rol" id="rol" placeholder="rol">
            </li>
            

            <button type="submit">aanmaken</button>
        </ul>
        <?php include 'footer.php' ?>
</body>

</html>