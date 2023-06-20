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

    <form action="verwerk-inloggen.php" method="post">
    <h1>Inloggen</h1>
        <div class="form-groep">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="email">
        </div>
        <div class="form-groep">
            <label for="wachtwoord">Wachtwoord</label>
            <input type="password" name="wachtwoord" id="wachtwoord" placeholder="Wachtwoord">
        </div>
        <button type="submit">Inloggen</button>
        <?php include 'footer.php'?>
    </form>
</body>
</html>