<?php

  /*
    * @autor: Thomas Lopera Muñoz
    * @fecha: 01/09/2026
    * @descripción: Apartado de contacto para dudas, propuestas y asesoría estudiantil.
  */
// Inicia una sesión para mantener la información del usuario durante la navegación
session_start();
// Incluye el archivo de conexión con la base de datos
include 'conexion.php';
// Verifica que el formulario haya sido enviado mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos enviados desde el formulario de contacto
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    // Consulta SQL para insertar la información en la tabla "contacto"
    $sql = "INSERT INTO contacto
    (nombre, correo, telefono, asunto, mensaje)
    VALUES
    ('$nombre', '$correo', '$telefono', '$asunto', '$mensaje')";
    // Ejecuta la consulta de inserción
    if (mysqli_query($conexion, $sql)) {
        // Muestra un mensaje de confirmación si el registro fue exitoso
        echo "<script>alert('Mensaje enviado correctamente');</script>";
    } else {
        // Muestra el error generado por MySQL si ocurre algún problema
        echo "Error: " . mysqli_error($conexion);
    }
}
?>
<!DOCTYPE html>
<!-- Página de contacto para dudas, propuestas y asesoría estudiantil. -->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COESCON — Contáctanos</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&family=Pirata+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/script.js" defer></script>
</head>
<body>
<button id="a11y-btn" aria-label="Accesibilidad" onclick="toggleA11y()">
  <svg viewBox="0 0 24 24"><path d="M12 2a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm8 5H4l3 8h3l1 7h2l1-7h3z"/></svg>
</button>
<div id="a11y-panel">
  <h4>Accesibilidad</h4>
  <div class="a11y-row">
    <span>Alto contraste</span>
    <button class="a11y-toggle" id="toggle-contrast" onclick="toggleContrast(this)"></button>
  </div>
  <div class="a11y-row">
    <span>Texto grande</span>
    <button class="a11y-toggle" id="toggle-text" onclick="toggleText(this)"></button>
</div>
  <div class="a11y-row">
    <span>Tamaño fuente</span>
    <div class="a11y-size">
      <button onclick="changeFontSize(-1)">A−</button>
      <button onclick="changeFontSize(1)">A+</button>
    </div>
  </div>
</div>

<div id="main-site" class="visible">
  <!-- Navegación principal y estructura general de la página. -->
  <nav id="navbar">
    <a href="index.php" class="nav-logo">
      <div class="emblem">CO</div>
      <span>COESCON</span>
    </a>
    <ul class="nav-links">
      <li><a href="index.php" class="nav-home">Inicio</a></li>
      <li><a href="quienes-somos.html">Quiénes Somos</a></li>
      <li><a href="historia.html">Historia</a></li>
      <li><a href="actividades.html">Actividades</a></li>
      <li><a href="equipo.html">Equipo</a></li>
      <li><a href="contacto.php" class="nav-cta">Contáctanos</a></li>
      <li><a href="registrar.php" class="">Registrar</a></li>
      <li><a href="iniciar.php" class="nav">Iniciar Sesión</a></li>
    </ul>
    <button class="hamburger" id="hamburger" onclick="toggleMenu()" aria-label="Menú">
      <span></span><span></span><span></span>
    </button>
  </nav>
  <div class="mobile-menu" id="mobile-menu">
    <a href="index.php" onclick="closeMobileMenu()">Inicio</a>
    <a href="quienes-somos.html" onclick="closeMobileMenu()">Quiénes Somos</a>
    <a href="historia.html" onclick="closeMobileMenu()">Historia</a>
    <a href="actividades.html" onclick="closeMobileMenu()">Actividades</a>
    <a href="equipo.html" onclick="closeMobileMenu()">Equipo</a>
    <a href="contacto.php" onclick="closeMobileMenu()">Contáctanos</a>
  </div>

  <!-- Sección de contacto y formulario para mensajes de la comunidad. -->
  <section id="contacto">
    <div class="container">
      <div class="reveal">
        <div class="section-label">Contacto</div>
        <h2 class="section-title">¿Tienes algo que<br>decir? <em style="font-style:italic;color:var(--blue-600)">Te escuchamos.</em></h2>
      </div>
      <div class="contact-grid reveal">
        <div class="contact-info">
          <h3>Estamos aquí para servir a la comunidad estudiantil</h3>
          <p>COESCON tiene puertas abiertas para toda propuesta, queja, idea o simplemente para quien quiera unirse al equipo. Tu participación es el motor de nuestra gestión.</p>
          <div class="contact-item">
            <div class="icon-wrap">📍</div>
            <div class="details">
              <strong>Oficina Principal</strong>
              <span>Bloque A, Piso 2 — Sala Estudiantil 204</span>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon-wrap">📧</div>
            <div class="details">
              <strong>Correo Institucional</strong>
              <span>consejo@coescon.edu.co</span>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon-wrap">📞</div>
            <div class="details">
              <strong>Línea Estudiantil</strong>
              <span>+57 (4) 321-5500 Ext. 204</span>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon-wrap">🕐</div>
            <div class="details">
              <strong>Horario de Atención</strong>
              <span>Lun–Vie, 8:00am – 5:00pm</span>
            </div>
          </div>
        </div>
        
<form action="contacto.php" method="POST">

    <div class="form-group">
        <label>Nombre Completo</label>
        <input type="text" name="nombre" required>
    </div>

    <div class="form-group">
        <label>Correo Electrónico</label>
        <input type="email" name="correo" required>
    </div>

    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="telefono">
    </div>

    <div class="form-group">
        <label>Asunto</label>
        <input type="text" name="asunto">
    </div>

    <div class="form-group">
        <label>Mensaje</label>
        <textarea name="mensaje" rows="5" required></textarea>
    </div>

          <button class="form-submit" onclick="sendMessage(this)">
            <svg width="18" height="18" fill="white" viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
            Enviar mensaje
          </button>
        </div>
      </div>
    </div>
</form>
  </section>

  <footer>
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo">COESCON</div>
        <p>Cómite Escolar De Convivencia. </p>
      </div>
      <div class="footer-col">
        <h4>Navegación</h4>
        <ul>
          <li><a href="quienes-somos.html">Quiénes Somos</a></li>
          <li><a href="historia.html">Historia</a></li>
          <li><a href="actividades.html">Actividades</a></li>
          <li><a href="equipo.html">Equipo</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Recursos</h4>
        <ul>
          <li><a href="#">Estatutos</a></li>
          <li><a href="#">Informes de Gestión</a></li>
          <li><a href="#">Convocatorias</a></li>
          <li><a href="#">Documentos</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Redes Sociales</h4>
        <ul>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter / X</a></li>
          <li><a href="#">YouTube</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 COESCON — Todos los derechos reservados</span>
      <div style="display:flex;gap:1.5rem;">
        <a href="#">Política de privacidad</a>
        <a href="#">Términos de uso</a>
      </div>
    </div>
  </footer>
</div>
</body>
</html>