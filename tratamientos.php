<?php require_once "./vistas/vista_superior.php"; ?>

<main class="tratamientos-main">
    <h1>Tratamientos / Servicios</h1>
    <h2>Mis Tratamientos</h2>
    
    <p class="intro">Experiencias de bienestar hechas a tu medida. Selecciono cada técnica y producto exclusivamente para ti. Mis servicios están diseñados para ofrecer resultados visibles y una relajación profunda, siempre adaptados a tus necesidades personales.</p>

    <div class="tratamientos-grid">
        <div class="tratamiento-categoria">
            <h3>Masajes Profesionales</h3>
            <div class="tratamiento-lista">
                <div class="tratamiento-item">
                    <strong>Relajante:</strong> Alivio de tensiones generales
                </div>
                <div class="tratamiento-item">
                    <strong>Descontracturante:</strong> Enfoque en zonas musculares específicas
                </div>
                <div class="tratamiento-item">
                    <strong>Deportivo:</strong> Preparación y recuperación muscular
                </div>
                <div class="tratamiento-item">
                    <strong>Reductivo:</strong> Moldeamiento corporal
                </div>
            </div>
        </div>

        <div class="tratamiento-categoria">
            <h3>Masajes Holísticos</h3>
            <div class="tratamiento-lista">
                <div class="tratamiento-item">
                    <strong>Bambuterapia:</strong> Masaje con cañas de bambú
                </div>
                <div class="tratamiento-item">
                    <strong>Pindaterapia:</strong> Terapia con packs herbales
                </div>
                <div class="tratamiento-item">
                    <strong>Esferoterapia:</strong> Uso de esferas para liberación muscular
                </div>
                <div class="tratamiento-item">
                    <strong>Piedras Calientes:</strong> Terapia térmica profunda
                </div>
                <div class="tratamiento-item">
                    <strong>Crioterapia:</strong> Terapia de frío para inflamación
                </div>
            </div>
        </div>

        <div class="tratamiento-categoria">
            <h3>Tratamientos Faciales</h3>
            <div class="tratamiento-lista">
                <div class="tratamiento-item">
                    <strong>Hidratante:</strong> Nutrición intensiva para tu piel
                </div>
                <div class="tratamiento-item">
                    <strong>Limpieza Profunda:</strong> Desintoxicación y renovación facial
                </div>
            </div>
        </div>

        <div class="tratamiento-categoria">
            <h3>Terapias Corporales</h3>
            <div class="tratamiento-lista">
                <div class="tratamiento-item">
                    <strong>Exfoliación:</strong> Renovación celular
                </div>
                <div class="tratamiento-item">
                    <strong>Wrap de Algas:</strong> Detoxificación corporal
                </div>
                <div class="tratamiento-item">
                    <strong>Aromaterapia:</strong> Terapia sensorial con esencias naturales
                </div>
            </div>
        </div>

        <div class="tratamiento-categoria">
            <h3>Spa de Manos y Pies</h3>
            <div class="tratamiento-lista">
                <div class="tratamiento-item">
                    <strong>Manicura Spa:</strong> Cuidado integral de manos
                </div>
                <div class="tratamiento-item">
                    <strong>Pedicura Spa:</strong> Tratamiento podológico estético
                </div>
            </div>
        </div>

        <div class="tratamiento-categoria">
            <h3>Terapias Especializadas</h3>
            <div class="tratamiento-lista">
                <div class="tratamiento-item">
                    <strong>Drenaje Linfático:</strong> Estimulación del sistema linfático
                </div>
                <div class="tratamiento-item">
                    <strong>Reflexología:</strong> Terapia de puntos reflejos
                </div>
                <div class="tratamiento-item">
                    <strong>Reiki:</strong> Sanación energética
                </div>
                <div class="tratamiento-item">
                    <strong>Ventosas:</strong> Terapia de succión tradicional
                </div>
            </div>
        </div>
    </div>

    <p class="final">Cada cita es un momento privado, sin prisas y completamente dedicado a tu bienestar.</p>
</main>

<style>
.tratamientos-main {
    max-width: 1200px;
    width: 90%;
    margin: 50px auto;
    padding: 60px 50px;
    background-color: #f8f4e9;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    font-family: 'Georgia', serif;
    line-height: 1.8;
    color: #5a5426;
    position: relative;
    overflow: hidden;
}

.tratamientos-main::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #929007, #d4c9a8);
}

.tratamientos-main h1 {
    font-size: 2.8rem;
    margin-bottom: 30px;
    color: #929007;
    text-align: center;
    font-weight: 500;
    letter-spacing: 1px;
    position: relative;
    padding-bottom: 15px;
}

.tratamientos-main h1::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 2px;
    background-color: #d4c9a8;
}

.tratamientos-main h2 {
    font-size: 1.8rem;
    margin-bottom: 40px;
    text-align: center;
    color: #7a7606;
    font-weight: 400;
    font-style: italic;
}

.tratamientos-main h3 {
    font-size: 1.5rem;
    margin-bottom: 25px;
    color: #929007;
    text-align: center;
    font-weight: 500;
    position: relative;
    padding-bottom: 10px;
}

.tratamientos-main h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 1px;
    background-color: #d4c9a8;
}

.tratamientos-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin: 50px 0;
}

.tratamiento-categoria {
    background: rgba(255, 255, 255, 0.7);
    padding: 30px 25px;
    border-radius: 12px;
    border: 1px solid #e8e0d0;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.tratamiento-categoria:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    border-color: #d4c9a8;
}

.tratamiento-lista {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.tratamiento-item {
    padding: 12px 15px;
    background: rgba(248, 244, 233, 0.8);
    border-radius: 8px;
    border-left: 3px solid transparent;
    transition: all 0.3s ease;
    text-align: left;
}

.tratamiento-item:hover {
    border-left: 3px solid #929007;
    background: rgba(222, 206, 175, 0.2);
}

.tratamiento-item strong {
    color: #929007;
    font-weight: 600;
    display: block;
    margin-bottom: 5px;
}

.intro {
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 50px;
    padding: 0 20px;
    line-height: 1.8;
}

.final {
    text-align: center;
    font-style: italic;
    font-size: 1.2rem;
    color: #929007;
    margin-top: 40px;
    padding: 20px;
    background-color: rgba(222, 206, 175, 0.2);
    border-radius: 8px;
}

/* Responsive para móviles */
@media (max-width: 768px) {
    .tratamientos-main {
        width: 95%;
        padding: 30px 20px;
        margin: 30px auto;
    }

    .tratamientos-main h1 {
        font-size: 2rem;
        margin-bottom: 25px;
    }

    .tratamientos-main h2 {
        font-size: 1.4rem;
        margin-bottom: 30px;
    }

    .tratamientos-main h3 {
        font-size: 1.3rem;
        margin-bottom: 20px;
    }

    .tratamientos-grid {
        grid-template-columns: 1fr;
        gap: 25px;
        margin: 30px 0;
    }

    .tratamiento-categoria {
        padding: 20px 15px;
    }

    .tratamiento-item {
        padding: 10px 12px;
    }

    .intro {
        font-size: 1rem;
        margin-bottom: 30px;
        padding: 0 10px;
    }
    
    .final {
        font-size: 1.1rem;
        padding: 15px;
    }
}
</style>

<?php require_once "./vistas/vista_inferior.php"; ?>