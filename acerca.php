<?php require_once "./vistas/vista_superior.php"; ?>

<main class="acerca-main">
    <h1>Acerca de Nosotros / Mi Historia</h1>
    <h2>Bienvenida a LUMA SPA: Tu Refugio Personal de Bienestar</h2>
    
    <p>En LUMA SPA, no solo encuentras un servicio, encuentras una experiencia dedicada exclusivamente a ti. Soy Guadalupe, la fundadora, masajista y el corazón detrás de este espacio. LUMA nació de mi profunda convicción de que el verdadero bienestar es una combinación armoniosa de cuidado exterior e interior, y de la pasión por ofrecer un servicio donde la calidad y la conexión personal sean lo más importante.</p>

    <p>Aquí, no eres un cliente más. Cada tratamiento es una cita única, diseñada y realizada íntegramente por mí. Esto me permite conocer tus necesidades, preferencias y metas de bienestar en profundidad, creando un vínculo de confianza y asegurando una atención meticulosa y consistente en cada visita.</p>

    <p>"LUMA" representa esa chispa interior que se enciende cuando te sientes renovada, radiante y en paz. Mi misión es guiarte para que esa luz brille con fuerza, a través de tratamientos estéticos y de relajación de la más alta calidad, en un ambiente sereno y discreto donde el tiempo se detiene y tú eres la única prioridad.</p>

    <p class="final">Te invito a desconectar del mundo y a reconectar contigo misma. Este es tu santuario.</p>
</main>

<style>
.acerca-main {
    max-width: 1000px;
    width: 90%;
    margin: 50px auto;
    padding: 60px 50px;
    background-color: #f8f4e9;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    font-family: 'Georgia', serif;
    line-height: 1.8;
    color: #5a5426;
    text-align: justify;
    position: relative;
    overflow: hidden;
}

.acerca-main::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #929007, #d4c9a8);
}

.acerca-main h1 {
    font-size: 2.8rem;
    margin-bottom: 30px;
    color: #929007;
    text-align: center;
    font-weight: 500;
    letter-spacing: 1px;
    position: relative;
    padding-bottom: 15px;
}

.acerca-main h1::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 2px;
    background-color: #d4c9a8;
}

.acerca-main h2 {
    font-size: 1.8rem;
    margin-bottom: 40px;
    text-align: center;
    color: #7a7606;
    font-weight: 400;
    font-style: italic;
}

.acerca-main p {
    margin-bottom: 30px;
    font-size: 1.1rem;
    text-align: justify;
    position: relative;
    padding-left: 20px;
    border-left: 2px solid transparent;
    transition: border-left 0.3s ease;
}

.acerca-main p:hover {
    border-left: 2px solid #d4c9a8;
}

.acerca-main p.final {
    text-align: center;
    font-style: italic;
    font-size: 1.2rem;
    color: #929007;
    margin-top: 40px;
    padding: 20px;
    background-color: rgba(222, 206, 175, 0.2);
    border-radius: 8px;
    border-left: none;
}

/* Responsive para móviles */
@media (max-width: 768px) {
    .acerca-main {
        width: 95%;
        padding: 30px 20px;
        margin: 30px auto;
    }

    .acerca-main h1 {
        font-size: 2rem;
        margin-bottom: 25px;
    }

    .acerca-main h2 {
        font-size: 1.4rem;
        margin-bottom: 30px;
    }

    .acerca-main p {
        font-size: 1rem;
        margin-bottom: 25px;
        padding-left: 15px;
    }
    
    .acerca-main p.final {
        font-size: 1.1rem;
        padding: 15px;
    }
}
</style>

<?php require_once "./vistas/vista_inferior.php"; ?>