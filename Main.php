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
    <p class="header-title">Merlin's-World</p>
    <button id="theme-toggle" aria-pressed="false">🌙 Dark Mode</button>
    <nav>
        <ul>
            <li><span id="clock"></span></li>
        </ul>
    </nav>
</header>
<nav class="page-nav">
    <ul>
        <li><a href="#stand">aktueller Stand</a></li>
        <li><a href="#aktuelle_Projekte">aktuelle Projekte</a></li>
        <li><a href="#Programmiersprachen">Programmiersprachen</a></li>
    </ul>
</nav>

<div id="scroll-sentinel"></div>
<br>
<main>
    <article>
        <div class="profile-image">
            <img src="/assets/Bild_Merlin.png" alt="Profilbild von Merlin">
        </div>
        <p>Hallo, mein Name ist Merlin! Aktuell studiere ich Informatik und bin auf dem Weg zum Fullstack-Entwickler.</p>
        <br>
    </article>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <section>
            <h2 id="stand">aktueller Stand / Skills</h2>
            <br>
            <p>HTML & CSS ✅ ==> Git & GitHub ✅ ==> JavaScript ✅==> TypeScript ⏳ ==> React 🔜 ==> Node.js ==> SQL + Prisma ==> Next.js ==> Deployment</p>
        </section>
    <br>
    <br>
    <br>

    <section>
        <h2 id="aktuelle_Projekte"> aktuelle Projekte</h2>
        <br>
        <p>Nothing to see here...</p>
    </section>

    <br>
    <br>
    <br>

    <section>
        <h2 id="Programmiersprachen">Programmiersprachen</h2>
        <br>
        <div class="lang-icons">
            <img src="https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/java/java-original.svg"        alt="Java">
            <img src="https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/python/python-original.svg"     alt="Python">
            <img src="https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/html5/html5-original.svg"       alt="HTML5">
            <img src="https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/css3/css3-original.svg"         alt="CSS3">
            <img src="https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/javascript/javascript-original.svg" alt="JavaScript">
        </div>
        <br>
        <br>
    </section>
</main>

<button id="scroll-top" aria-label="Nach oben" hidden>Zurück zum Anfang...</button>
<footer>
    <div>
        <a href="html/Kontakt.html">Kontakt </a>
        <a href ="https://github.com/Merlin90909" target="_blank">GitHub</a>
        <a href ="html/ToDo-Liste">ToDo-Liste</a>
    </div>

    <p>© 2025 by Merlin90909</p>
</footer>

<script src="js/darkmode.js"></script>
<script src="js/Uhrzeit.js" defer></script>
<script src="js/Scroll-Button.js" defer></script>

</body>

</html>