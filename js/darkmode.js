// Darkmode-Zustand wiederherstellen beim Laden
const btn = document.getElementById("theme-toggle");
// initial ARIA state: not pressed (light mode)
btn.setAttribute("aria-pressed", "false");
if (localStorage.getItem('darkmode') === 'true') {
    document.body.classList.add('dark-mode');
    btn.textContent = " ☀️White-Mode";
    btn.setAttribute("aria-pressed", "true");
}
document.getElementById("theme-toggle").addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");

    const isDark = document.body.classList.contains("dark-mode");
    this.textContent = isDark ? " ☀️White-Mode" : " 🌙 Dark-Mode";
    this.setAttribute("aria-pressed", String(isDark));

    localStorage.setItem('darkmode', isDark);
});


//innerHTML = Ausgabe Text
//document.getElementById("demo").innerHTML = "<p>Hello World</p>";
//innerText = Ausgabe Text
//document.getElementById("demo").innerText ="Hello World";
//doument.write() = Seite wird 'gelöscht' bis zur nächsten Aktualisierung und eine neue Seite mit der Lösung wird gezeigt
//document.write(5 + 6);
//window.alert() = Anzeige als dringende Meldung vom Browser
//window.alert(5+6);
//alert(6+6);
//console.log(6+6);