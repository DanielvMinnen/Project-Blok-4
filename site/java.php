<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/java.css">
    <!-- <link rel="stylesheet" href="css/footer.css"> -->
</head>
<?php include 'nav.php' ?>

<body>
        <div class="container2">
            <ul>
                <li>&lt;html&gt;: Het root-element van een HTML-document.</li>
                <li>&lt;head&gt;: Het element dat metadata en inleidende informatie over het document bevat.</li>
                <li>&lt;body&gt;: Het element dat de zichtbare inhoud van het document bevat.</li>
                <li>&lt;h1&gt;-&lt;h6&gt;: Kop-elementen voor het aangeven van verschillende niveaus van koppen.</li>
                <li>&lt;p&gt;: Het element voor het weergeven van alinea's tekst.</li>
                <li>&lt;a&gt;: Het ankerelement voor het maken van links naar andere webpagina's of bronnen.</li>
                <li>&lt;img&gt;: Het element voor het weergeven van afbeeldingen.</li>
                <li>&lt;ul&gt;: Het niet-geordende lijst-element voor het maken van bulleted lijsten.</li>
                <li>&lt;ol&gt;: Het geordende lijst-element voor het maken van genummerde lijsten.</li>
                <li>&lt;li&gt;: Het element dat een lijstpunt bevat binnen een lijst.</li>
                <li>&lt;div&gt;: Het generieke container-element voor het groeperen van andere elementen.</li>
                <li>&lt;span&gt;: Het generieke inline-element voor het toepassen van stijlen op specifieke delen van tekst.</li>
                <li>&lt;form&gt;: Het element voor het maken van interactieve formulieren.</li>
                <li>&lt;input&gt;: Het element voor het maken van invoervelden in formulieren.</li>
                <li>&lt;button&gt;: Het element voor het maken van interactieve knoppen.</li>
                <li>&lt;table&gt;: Het element voor het maken van tabellen.</li>
                <li>&lt;tr&gt;: Het element dat een rij definieert binnen een tabel.</li>
                <li>&lt;td&gt;: Het element dat een cel definieert binnen een tabelrij.</li>
            </ul>

        </div>
        <div>
            <h2>Opdracht 1: Link naar een externe website</h2>
            <p>Maak een hyperlink naar de website van OpenAI.</p>
            <a href="https://www.openai.com">Ga naar OpenAI</a>

            <h2>Opdracht 2: Afbeelding invoegen</h2>
            <p>Voeg een afbeelding toe van een kat.</p>
            <img src="cat.jpg" alt="Afbeelding van een kat">

            <h2>Opdracht 3: Formulier met invoerveld en knop</h2>
            <p>Maak een formulier met een tekstveld en een knop om de ingevoerde tekst weer te geven.</p>
            <form>
                <label for="tekst">Voer tekst in:</label>
                <input type="text" id="tekst" name="tekst">
                <button type="button" onclick="showText()">Toon tekst</button>
            </form>
            <p id="resultaat"></p>

            <script>
                function showText() {
                    var input = document.getElementById("tekst").value;
                    document.getElementById("resultaat").textContent = "Ingevoerde tekst: " + input;
                }
            </script>

        </div>


        <?php include 'footer.php' ?>
</body>

</html>