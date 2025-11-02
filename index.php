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





<!-- Sección Player Cards -->
<section id="player-cards" class="cards-container">
    <div class="card-list"></div> <!-- Aquí se cargarán las cards dinámicamente -->
</section>

<?php require_once "./vistas/vista_inferior.php"; ?>


<!-- Sección Player Cards -->
<section id="player-cards" class="cards-container">
  <div class="card-list"></div>
</section>

<?php require_once "./vistas/vista_inferior.php" ?>


<!-- Sección Player Cards -->
<section id="player-cards" class="cards-container">
  <!-- Las cards se cargarán dinámicamente con JavaScript -->
  <div class="card-list"></div>
</section>

  
 <?php require_once "./vistas/vista_inferior.php" ?>