    // erst nach kompletten Lösen der Seite wird das Element gelöst
    document.addEventListener('DOMContentLoaded', () => {
    const clockEl = document.getElementById('clock');
    // bei jedem Aufruf schreibt in den Zeitstempel in den Span (Arrow-Funktion)
    const updateClock = () => {
    //deutsche Formation der Angabe
    clockEl.textContent = new Date().toLocaleString('de-DE');
};
    updateClock(); // erste Initialisierung
    //alle 1000ms wird updateClock() erneut aufgerufen
    setInterval(updateClock, 1000);
});
