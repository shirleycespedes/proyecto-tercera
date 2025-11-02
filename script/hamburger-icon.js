document.addEventListener('DOMContentLoaded', () => {
    const toggler = document.querySelector('.navbar-toggler');
    const menu = document.querySelector('.navbar-menu');

    // Abrir/cerrar menú al hacer click en el botón
    toggler.addEventListener('click', (e) => {
        e.stopPropagation(); // evita que el click se propague al documento
        menu.classList.toggle('active');
        toggler.textContent = menu.classList.contains('active') ? "✕" : "☰";
    });

    
});
