<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset ="UTF-8">
    <meta name ="description" content ="Kontakt">
    <meta name="author" content="Merlin90909">
    <meta http-equiv="refresh" content="10">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kontakt </title>
    <link rel = "stylesheet" href="css/style.css">
    <link rel = "icon" type="image/png" href="world-wide-web_1006771.png">
</head>
<body>
<header>
    <p class="header-title">Kontakt</p>
    <button id="theme-toggle">🌙 Dark Mode</button>
</header>
<nav>
    <ul>
        <li><a href="Main.php">Startseite</a></li>
        <?php
        echo date("d.m.Y H:i:s");
        ?>
    </ul>
</nav>
<pre>
    Merlin90909
    Email not found...
</pre>
<br>
<br>
<br>

<p>Für die Kontaktaufnahme bitte dieses Formular ausfüllen!</p>
<br>
<form method="post" action="">
    <label for="vorname">Vorname:</label><br>
    <input type="text" id="vorname" name="vorname"><br>
    <label for="nachname">Nachname:</label><br>
    <input type="text" id="nachname" name="nachname"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="anfrage">Anfrage:</label><br>
    <input type="text" id="anfrage" name="anfrage"><br>
    <input type="submit" value="Abschicken">
</form>

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
