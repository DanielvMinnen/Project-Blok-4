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

    <h1>Registreren</h1>
    <form action="verwerk-registreren.php" method="post">
        <ul>
            <li>
                <label for="email_adres">E-mail</label><br>
                <input type="text" name="email" id="email" placeholder="E-mail">
            </li>
            <li>
                <label for="mobielnummer">Mobielnummer</label><br>
                <input type="text" name="mobielnummer" id="mobielnummer" placeholder="mobielnummer">
            </li>
            <li>
                <label for="postcode">Postcode</label><br>
                <input type="text" name="postcode" id="postcode" placeholder="Postcode">
            </li>
        </ul>
        <ul>
            <li>
                <label for="naam">Voornaam</label><br>
                <input type="text" name="voornaam" id="voornaam" placeholder="Voornaam">
            </li>
            <li>
                <label for="huisnummer">Huisnummer</label><br>
                <input type="text" name="huisnummer" id="huisnummer" placeholder="Huisnummer">
            </li>
            <li>
                <label for="land">Land</label><br>
                <input type="text" name="land" id="land" placeholder="Land">
            </li>


        </ul>
        <ul>
            <li>
                <label for="naam">Tussenvoegsel</label><br>
                <input type="text" name="tussenvoegsel" id="tussenvoegsel" placeholder="Tussenvoegsel">
            </li>
            <li>
                <label for="straatnaam">Straatnaam</label><br>
                <input type="text" name="straatnaam" id="straatnaam" placeholder="Straatnaam">
            </li>

            <li>
                <label for="Gebruikersnaam">Gebruikersnaam</label><br>
                <input type="text" name="gebruikersnaam" id="gebruikersnaam" placeholder="Gebruikersnaam">
            </li>
        </ul>
        <ul>
            <li>
                <label for="naam">Achternaam</label><br>
                <input type="text" name="achternaam" id="achternaam" placeholder="Achternaam">
            </li>
            <li>
                <label for="plaatsnaam">Plaatsnaam</label><br>
                <input type="text" name="plaatsnaam" id="plaatsnaam" placeholder="Plaatsnaam">
            </li>


            <li>
                <label for="wachtwoord">Wachtwoord</label><br>
                <input type="text" name="wachtwoord" id="wachtwoord" placeholder="Wachtwoord">
            </li>
        </ul>
        <ul>
            <li>
                <label for="geslacht">Geslacht</label>
                <select id="geslacht" name="geslacht">
                    <option value="man">Man</option>
                    <option value="vrouw">Vrouw</option>
                </select>
            </li>
            <li>
                <label for="rol">Kies een rol</label>
                <select id="rol" name="rol">
                    <option value="administrator">Administrator</option>
                    <option value="manager">Manager</option>
                    <option value="regular">Regular</option>
                </select>
            </li>
            <li>
            <label for="afdeling">Afdeling</label><br>
                <input type="text" name="afdeling" id="afdeling" placeholder="afdeling">
            </li>
            <button type="submit">aanmaken</button>
        </ul>
        <?php include 'footer.php' ?>
    </form>
</body>

</html>