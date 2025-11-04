<?php require_once "./vistas/vista_superior.php" ?>

<!-- Carrusel horizontal de videos -->
<section id="video-carousel" class="video-carousel">
    <div class="carousel-track">
        <video autoplay muted loop><source src="videos/relax1.mp4" type="video/mp4"></video>
        <video autoplay muted loop><source src="videos/relax2.mp4" type="video/mp4"></video>
        <video autoplay muted loop><source src="videos/relax3.mp4" type="video/mp4"></video>
        <video autoplay muted loop><source src="videos/relax4.mp4" type="video/mp4"></video>
        <video autoplay muted loop><source src="videos/relax5.mp4" type="video/mp4"></video>

        <!-- Repetimos los videos para efecto infinito -->
        <video autoplay muted loop><source src="videos/relax1.mp4" type="video/mp4"></video>
        <video autoplay muted loop><source src="videos/relax2.mp4" type="video/mp4"></video>
        <video autoplay muted loop><source src="videos/relax3.mp4" type="video/mp4"></video>
        <video autoplay muted loop><source src="videos/relax4.mp4" type="video/mp4"></video>
        <video autoplay muted loop><source src="videos/relax5.mp4" type="video/mp4"></video>
    </div>
</section>

<!-- Sección de Bienvenida Elegante -->
<section class="welcome-section">
    <div class="welcome-container">
        <!-- Logo centrado -->
        <div class="logo-container">
             <img src="img/logo.png" alt="LUMA SPA" width="100">
        
        <!-- Título debajo del logo -->
        <h1 class="welcome-title">Bienvenidos a LUMA SPA</h1>
        
        <!-- Descripción -->
        <p class="welcome-desc">
            Donde tu bienestar es nuestra prioridad. En LUMA SPA, creemos que cada persona merece 
            un momento de paz y rejuvenecimiento. Nuestros tratamientos personalizados están 
            diseñados para iluminar tu belleza natural y restaurar tu equilibrio interior.
        </p>
        
        <!-- Características -->
        <div class="welcome-features">
            <div class="feature-item">
                <span class="feature-icon">✨</span>
                <span>Tratamientos personalizados</span>
            </div>
            <div class="feature-item">
                <span class="feature-icon">🌿</span>
                <span>Productos naturales premium</span>
            </div>
            <div class="feature-item">
                <span class="feature-icon">💫</span>
                <span>Ambiente sereno y armonioso</span>
            </div>
        </div>
    </div>
</section>

<!-- Sección Player Cards -->
<section id="player-cards" class="cards-container">
    <div class="card-list"></div> <!-- Aquí se cargarán las cards dinámicamente -->
</section>

<!-- Sección Player Cards -->
<section id="player-cards" class="cards-container">
    <div class="card-list"></div>
</section>

<!-- Sección Player Cards -->
<section id="player-cards" class="cards-container">
    <!-- Las cards se cargarán dinámicamente con JavaScript -->
    <div class="card-list"></div>
</section>

<section class="faq-section">
    <h2 class="faq-title">Preguntas Frecuentes</h2>
    <div class="faq-container">
        <!-- Columna 1 -->
        <div class="faq-column">
            <div class="accordion-item">
                <div class="accordion-header">1. ¿Cómo debo prepararme para mi tratamiento?</div>
                <div class="accordion-body">
                    Recomendamos venir con al menos 2 horas de ayuno de comidas pesadas, usar ropa cómoda y evitar el consumo de alcohol el día de tu sesión. Para tratamientos faciales, ven sin maquillaje.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">2. ¿Con cuánta anticipación debo reservar mi cita?</div>
                <div class="accordion-body">
                    Sugerimos reservar con 3-5 días de anticipación para garantizar tu horario preferido. Para fines de semana, recomiendo reservar con una semana de anticipación.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">3. ¿Qué métodos de pago aceptan?</div>
                <div class="accordion-body">
                    Aceptamos efectivo, transferencias bancarias y SINPE móvil. También ofrecemos paquetes promocionales con múltiples sesiones.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">4. ¿Puedo reprogramar o cancelar mi cita?</div>
                <div class="accordion-body">
                    Sí, aceptamos cancelaciones o reprogramaciones con al menos 24 horas de anticipación. Las cancelaciones de último momento pueden aplicar cargos.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">5. ¿Los tratamientos tienen contraindicaciones?</div>
                <div class="accordion-body">
                    Algunos tratamientos no son recomendables durante embarazo, con condiciones cardíacas o enfermedades de la piel. Consulta siempre antes de reservar.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">6. ¿Ofrecen tratamientos para hombres?</div>
                <div class="accordion-body">
                    ¡Absolutamente! Todos nuestros tratamientos están disponibles para hombres y mujeres. Adaptamos cada técnica según las necesidades específicas.
                </div>
            </div>
        </div>

        <!-- Columna 2 -->
        <div class="faq-column">
            <div class="accordion-item">
                <div class="accordion-header">7. ¿Cuánto tiempo dura una sesión típica?</div>
                <div class="accordion-body">
                    Los tratamientos varían entre 60 minutos (masajes básicos) hasta 120 minutos (rituales completos). La duración exacta se confirma al reservar.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">8. ¿Puedo elegir la terapeuta?</div>
                <div class="accordion-body">
                    Al ser yo la única terapeuta en LUMA SPA, garantizo consistencia y calidad en cada tratamiento. Todas las sesiones son realizadas personalmente por mí.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">9. ¿Qué incluye el precio de los tratamientos?</div>
                <div class="accordion-body">
                    Cada tratamiento incluye consulta personalizada, productos premium y tiempo completo de dedicación. No hay cargos ocultos.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">10. ¿Ofrecen servicios a domicilio?</div>
                <div class="accordion-body">
                    Actualmente todos los tratamientos se realizan en el spa para garantizar la máxima calidad y esterilización del equipo.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">11. ¿Puedo combinar múltiples tratamientos en una misma visita?</div>
                <div class="accordion-body">
                    Sí, ofrecemos rituales combinados y podemos crear paquetes personalizados según tus necesidades y tiempo disponible.
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">12. ¿Qué diferencia a LUMA SPA de otros centros de bienestar?</div>
                <div class="accordion-body">
                    En LUMA SPA recibes atención 100% personalizada. Al ser la única terapeuta, desarrollo un conocimiento profundo de tus necesidades específicas, garantizando consistencia en cada visita y creando un vínculo de confianza único que los spas convencionales no pueden ofrecer.
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "./vistas/vista_inferior.php" ?>
