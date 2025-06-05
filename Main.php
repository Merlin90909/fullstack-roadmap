<?php
#$pdo = new PDO('mysql:host=localhost;dbname=testDB', 'root', '');
?>
<!DOCTYPE html>
<html lang="de-DE">

<head>
    <meta charset ="UTF-8">
    <meta name ="description" content ="eigene Website">
    <meta name="author" content="Merlin90909">
    <!--<meta http-equiv="refresh" content="10">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route to Fullstack</title>
    <link rel = "stylesheet" href="css/style.css">
    <link rel = "icon" type="image/png" href="assets/world-wide-web_1006771.png">
</head>

<body>
<header>
    <p class="header-title">FullStack</p>
    <button id="theme-toggle">🌙 Dark Mode</button>
    <nav>
        <ul>
            <li><span id="clock"></span></li>
        </ul>
    </nav>
</header>
<main>
    <article>
        <h1>Über mich:</h1>
        <p>Hallo, mein Name ist Merlin! Aktuell studiere ich Informatik und bin auf dem Weg zum Fullstack-Entwickler.</p>
        <br>

    </article>


        <section>
            <h2>aktueller Stand/Skills</h2>
            <ul class="roadmap-list">
                <li><input type="checkbox" checked disabled> HTML & CSS ✅</li>
                <li><input type="checkbox" checked disabled> Git & GitHub ✅</li>
                <li><input type="checkbox" disabled> JavaScript ⏳</li>
                <li><input type="checkbox" disabled> TypeScript 🔜</li>
                <li><input type="checkbox" disabled> React 🔜</li>
                <li><input type="checkbox" disabled> Node.js</li>
                <li><input type="checkbox" disabled> SQL + Prisma</li>
                <li><input type="checkbox" disabled> Next.js</li>
                <li><input type="checkbox" disabled> Deployment</li>
            </ul>
        </section>
    <br>
    <br>
    <br>

    <section>
        <h2>aktuelle Projekte:</h2>
        <p>Nothing to see here....</p>
    </section>

    <br>
    <br>
    <br>

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
    <a href ="https://github.com/Merlin90909" target="_blank">GitHub</a>
    <p>© 2025 by Merlin90909</p>
</footer>

<script src="js/index.js"></script>
<script src="js/Uhrzeit.js" defer></script>
</body>

</html>