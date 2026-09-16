<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<!-- Página de identidad y propósito del Consejo Estudiantil COESCON. -->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COESCON — Quiénes Somos</title>
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

  <div id="main-site">
    <header id="navbar" class="site-header">
      <div class="container header-inner">
        <a href="index.php" class="nav-logo">
          <div class="emblem">CO</div>
          <span>COESCON</span>
        </a>
        <ul class="nav-links">

    <li><a href="index.php">Inicio</a></li>
    <li><a href="manual.php">Manual</a></li>
    <li><a href="quienes-somos.php">Quiénes Somos</a></li>
    <li><a href="actividades.php">Actividades</a></li>
    <li><a href="equipo.php">Equipo</a></li>
    <li><a href="contacto.php">Contáctanos</a></li>

        <?php if (!empty($_SESSION['correo'])): ?>

        <li>
            <a href="perfil.php">
                <?php echo htmlspecialchars($_SESSION['usuario']); ?>
            </a>
        </li>

        <li>
            <a href="PHP/cerrar_sesion.php">Cerrar Sesión</a>
        </li>

    <?php else: ?>

        <li>
            <a href="registrar.php">Registro</a>
        </li>

        <li>
            <a href="Iniciar.php">Iniciar Sesión</a>
        </li>

    <?php endif; ?>

</nav>

<nav>
</ul>
        <button id="hamburger" class="hamburger" aria-label="Abrir menú" onclick="toggleMenu()">
          <span></span><span></span><span></span>
        </button>
      </div>
      <div id="mobile-menu" class="mobile-menu">
        <a href="#hero" onclick="closeMobileMenu()">Inicio</a>
        <a href="quienes-somos.html" onclick="closeMobileMenu()">Quiénes Somos</a>
        <a href="historia.html" onclick="closeMobileMenu()">Historia</a>
        <a href="actividades.html" onclick="closeMobileMenu()">Actividades</a>
        <a href="equipo.html" onclick="closeMobileMenu()">Equipo</a>
        <a href="contacto.php" onclick="closeMobileMenu()">Contáctanos</a>
      </div>
    </header>
</nav>
  <!-- Sección de identidad, misión y valores del Consejo Estudiantil. -->
  <section id="quienes" class="quienes-pirate">
    <div class="container">
      <div class="section-header reveal" style="position:relative;z-index:2;">
        <div class="section-tag">Conócenos</div>
        <h2 class="section-title" style="color:#f4e4b0;">Quiénes Somos</h2>
        <div class="section-line"></div>
      </div>
      <div class="pirate-letter reveal">
        <div class="pirate-paper">
          <div class="letter-seal">⚜️</div>
          <span class="corner-ornament tl">✦</span>
          <span class="corner-ornament tr">✦</span>
          <span class="corner-ornament bl">✦</span>
          <span class="corner-ornament br">✦</span>
          <div class="letter-header">
            <div class="letter-title">Institución Educativa Gilberto Alzate Avendaño</div>
            <div class="letter-subtitle">— Carta de Identidad Institucional —</div>
          </div>
          <div class="letter-date">EL ALZATE VIVE POR VOS</div>
          <div class="letter-body">
            <p class="drop-cap">ManualitOnline es un proyecto desarrollado para facilitar el acceso y la comprensión del Manual de Convivencia de la Institución Educativa Gilberto Álzate Avendaño.</p>
            <p>SNuestra plataforma busca ofrecer un espacio digital sencillo, organizado e interactivo, donde estudiantes y docentes puedan consultar información importante de manera rápida y fácil.</p>
            <p>También contamos con un espacio dedicado a COESCON, donde se pueden conocer sus actividades, novedades y recibir sugerencias de los estudiantes para mejorar la convivencia escolar.</p>
            <p>Nuestro propósito es fortalecer la comunicación entre la comunidad educativa y promover el conocimiento, la participación y el cumplimiento de las normas de convivencia.</p>
          </div>
          <div class="letter-signature">
            <div class="sig-name">Humberto Bermudez Cardona · Rector </div>
            <div class="sig-title">Insitución Educativa Gilberto Alzate Avendaño ✦ 1962</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo">COESCON</div>
        <p>Cómite Escolar De Convivencia. Quince años construyendo una universidad más justa, democrática y comprometida con su gente.</p>
      </div>
      <div class="footer-col">
        <h4>Navegación</h4>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="manual.php">Manual</a></li>
            <li><a href="actividades.php">Actividades</a></li>
            <li><a href="equipo.php">Equipo</a></li>
            <li><a href="contacto.php">Contáctanos</a></li>
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