    document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('scroll-top');
    const sentinel = document.getElementById('scroll-sentinel');

    const io = new IntersectionObserver(entries => {
    entries.forEach(entry => {
    // Wenn der Sentinel sichtbar ist (am Seitenanfang), Button verstecken
    btn.hidden = entry.isIntersecting;
});
});
    io.observe(sentinel);

    btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
});
