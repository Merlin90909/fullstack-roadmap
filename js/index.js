// Darkmode-Zustand wiederherstellen beim Laden
if (localStorage.getItem('darkmode') === 'true') {
    document.body.classList.add('dark-mode');
    document.getElementById("theme-toggle").textContent = " ☀️White-Mode";
}
document.getElementById("theme-toggle").addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");

    const isDark = document.body.classList.contains("dark-mode");
    this.textContent = isDark ? " ☀️White-Mode" : " 🌙 Dark-Mode";

    localStorage.setItem('darkmode', isDark);
});

/*Checkbox-Zustand speichern*/
document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    // Beim Laden: gespeicherten Zustand anwenden
    const saved = localStorage.getItem(checkbox.id);
    if (saved !== null) {
        checkbox.checked = saved === 'true';
    }

    // Bei Änderung: neuen Zustand speichern
    checkbox.addEventListener('change', () => {
        localStorage.setItem(checkbox.id, checkbox.checked);
    });
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