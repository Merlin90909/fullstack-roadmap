<?php
$pdo = new PDO('mysql:host=localhost;dbname=testDB', 'root', '');
?>
<!DOCTYPE html>
<html lang="de-DE">

<head>
    <meta charset ="UTF-8">
    <meta name ="description" content ="eigene Website">
    <meta name="author" content="Merlin90909">
    <!--<meta http-equiv="refresh" content="10">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> erste Website </title>
    <link rel = "stylesheet" href="css/style.css">
    <link rel = "icon" type="image/png" href="world-wide-web_1006771.png">
</head>

<body>

<header>
    <p class="header-title">Erste Website</p>
    <button id="theme-toggle">🌙 Dark Mode</button>
</header>

<nav>
    <ul>
        <!--
        <li><a href="">Taschenrechner</a></li>
        <li><a href="ausgabenTracker.php">Ausgabentracker</a></li>
        <li><a href="html/link3.html">Uni</a></li>
        -->
        <?php
        echo date("d.m.Y H:i:s");
        ?>
    </ul>
</nav>

<main>
    <article>
        <h1>Allgemein</h1>
        <p><?php
            $name = "Merlin";
            echo "Hallo! Mein Name ist $name. Mein Ziel ist es FullStack Developer zu werden."
            ?></p>

        <p>
            aktuell zu finden unter:<br>
            http://localhost/meinprojekt/<br>
        </p>

        <br>

    </article>

    <section>
        <h2>Aktuelles</h2>
        <fieldset>
            <legend>Themen:</legend>
            <div>
                <input type="checkbox" id="html" name="interest" value="html"/>
                <label for="html">html</label>
            </div>
            <div>
                <input type="checkbox" id="css" name="interest" value="css"/>
                <label for="css">css</label>
            </div>
            <div>
                <input type="checkbox" id="jss" name="interest" value="jss"/>
                <label for="jss">jss</label>
            </div>
            <div>
                <input type="checkbox" id="php" name="interest" value="php"/>
                <label for="php">php</label>
            </div>
        </fieldset>

        <h2>aktuelle Projekte:</h2>



    </section>

    <section>
        <h2>Links</h2>
        <br>
        <a href = "https://www.youtube.com/" target="_blank"> Hier geht es zu YouTube!</a>
        <!-- href erzeugt als Artikel einen Link hinter dem nachfolgenden Titel-->
        <!--target="blank" gibt an, dass der Link in einem neuen Tab geöffnet wird-->
        <br>
        <br>
    </section>
</main>
<br>
<br>
<br>

<footer>
    <a href="kontakt.php">Kontakt </a>
    <p>© 2025 by Merlin90909</p>
</footer>

<script src="js/index.js"></script>
</body>

</html>