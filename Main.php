<?php
$pdo = new PDO('mysql:host=localhost;dbname=testDB', 'root', '');
?>
<!DOCTYPE html>
<html lang="de-DE">

<head>
    <meta charset ="UTF-8">
    <meta name ="description" content ="Merlin90909">
    <meta name="author" content="Merlin90909">
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
<div id="scroll-sentinel"></div>
<main>
    <article>
        <h2>Über mich:</h2>
        <br>
        <p>Hallo, mein Name ist Merlin! Aktuell studiere ich Informatik und bin auf dem Weg zum Fullstack-Entwickler.</p>
        <br>

    </article>


        <section>
            <h2>aktueller Stand/Skills</h2>
            <br>
            <p>HTML & CSS ✅ ==> Git & GitHub ✅ ==> JavaScript ⏳==> TypeScript 🔜 ==> React 🔜 ==> Node.js ==> SQL + Prisma ==> Next.js ==> Deployment</p>
        </section>
    <br>
    <br>
    <br>

    <section>
        <h2>aktuelle Projekte:</h2>
        <br>
        <p>Nothing to see here...</p>
    </section>

    <br>
    <br>
    <br>

    <section>
        <h2>Programmiersprachen</h2>
        <br>
        <i></i>
        <br>
        <br>
    </section>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button id="scroll-top" aria-label="Nach oben" hidden>Zurück zum Anfang...</button>
<footer>
    <a href="html/Kontakt.html">Kontakt </a>
    <a href ="https://github.com/Merlin90909" target="_blank">GitHub</a>
    <p>© 2025 by Merlin90909</p>
</footer>

<script src="js/darkmode.js"></script>
<script src="js/Uhrzeit.js" defer></script>
<script src="js/Scroll-Button.js" defer></script>

</body>

</html>