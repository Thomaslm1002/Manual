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
        <li><a href="manual.html">Manual</a></li>
        <li><a href="actividades.html">Actividades</a></li>
        <li><a href="equipo.html">Equipo</a></li>
        <li><a href="contacto.php">Contáctanos</a></li>
        <li><a href="registrar.php">Registrar</a></li>
        <li><a href="iniciar.php">Iniciar Sesión</a></li>
        </ul>
        <button class="hamburger" id="hamburger" onclick="toggleMenu()" aria-label="Menú">
        <span></span><span></span><span></span>
        </button>
    </nav>
    <div class="mobile-menu" id="mobile-menu">
        <a href="index.html" onclick="closeMobileMenu()">Inicio</a>
        <a href="quienes-somos.html" onclick="closeMobileMenu()">Quiénes Somos</a>
        <a href="historia.html" onclick="closeMobileMenu()">Historia</a>
        <a href="actividades.html" onclick="closeMobileMenu()">Actividades</a>
        <a href="equipo.html" onclick="closeMobileMenu()">Equipo</a>
        <a href="contacto.html" onclick="closeMobileMenu()">Contáctanos</a>
    </div>