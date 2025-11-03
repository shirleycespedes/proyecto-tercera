<?php require_once "./vistas/vista_superior.php"; ?>

<main class="politicas-main">
    <h1>Políticas del Spa</h1>
    <h2>Nuestro Compromiso</h2>
    
    <p>Para garantizar una experiencia tranquila y respetuosa para todos, te pido considerar estas políticas. Como trabajadora independiente, valoro enormemente el tiempo dedicado a cada cliente.</p>

    <p><strong>Reservas:</strong> Todas las citas son con reserva previa.</p>

    <p><strong>Cancelaciones:</strong> Agradezco un aviso con 24 horas de antelación. Las cancelaciones de último momento pueden tener cargo.</p>

    <p><strong>Puntualidad:</strong> Tu puntualidad asegura que disfrutes de tu sesión completa.</p>

    <p><strong>Ambiente:</strong> Mantenemos un espacio de silencio y relax para tu total desconexión.</p>

    <p class="final">Tu comprensión hace posible este espacio de armonía.</p>
</main>

<style>
.politicas-main {
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

.politicas-main::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #929007, #d4c9a8);
}

.politicas-main h1 {
    font-size: 2.8rem;
    margin-bottom: 30px;
    color: #929007;
    text-align: center;
    font-weight: 500;
    letter-spacing: 1px;
    position: relative;
    padding-bottom: 15px;
}

.politicas-main h1::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 2px;
    background-color: #d4c9a8;
}

.politicas-main h2 {
    font-size: 1.8rem;
    margin-bottom: 40px;
    text-align: center;
    color: #7a7606;
    font-weight: 400;
    font-style: italic;
}

.politicas-main p {
    margin-bottom: 25px;
    font-size: 1.1rem;
    text-align: justify;
    position: relative;
    padding-left: 20px;
    border-left: 2px solid transparent;
    transition: border-left 0.3s ease;
}

.politicas-main p:hover {
    border-left: 2px solid #d4c9a8;
}

.politicas-main p strong {
    color: #929007;
    font-weight: 600;
}

.politicas-main p.final {
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
    .politicas-main {
        width: 95%;
        padding: 30px 20px;
        margin: 30px auto;
    }

    .politicas-main h1 {
        font-size: 2rem;
        margin-bottom: 25px;
    }

    .politicas-main h2 {
        font-size: 1.4rem;
        margin-bottom: 30px;
    }

    .politicas-main p {
        font-size: 1rem;
        margin-bottom: 20px;
        padding-left: 15px;
    }
    
    .politicas-main p.final {
        font-size: 1.1rem;
        padding: 15px;
    }
}
</style>

<?php require_once "./vistas/vista_inferior.php"; ?>