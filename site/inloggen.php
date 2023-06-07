<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inloggen.css">
</head>
<body>
<h1>Inloggen</h1>
    <form action="verwerk_inloggen.php" method="post">
        <div class="form-groep">
            <label for="email_adres">E-mail</label>
            <input type="email-adres" name="email_adres" id="email_adres" placeholder="E-mail">
        </div>
        <div class="form-groep">
            <label for="wachtwoord">Wachtwoord</label>
            <input type="wachtwoord" name="wachtwoord" id="wachtwoord" placeholder="Wachtwoord">
        </div>
        <button type="submit">Inloggen</button>
    </form>
</body>
</html>