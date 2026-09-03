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
            <div class="letter-title">Institución Educativa Nuestra Señora del Mar Azul</div>
            <div class="letter-subtitle">— Carta de Identidad Institucional —</div>
          </div>
          <div class="letter-date">A los estudiantes, familias y pueblo en general — Año de Gracia 2024</div>
          <div class="letter-body">
            <p class="drop-cap">Que sepa todo aquel que lea este pergamino que somos una comunidad educativa forjada en el honor, la virtud y la búsqueda incansable del saber. Desde los confines de 1979, izamos nuestra bandera con orgullo y navegamos las aguas del conocimiento con valentía.</p>
            <p>Somos más de 1.200 almas valientes —estudiantes, maestros, familias— unidos por un propósito sagrado: cultivar mentes brillantes y corazones nobles. Como toda tripulación que se respete, tenemos un código de honor inquebrantable, una brújula que apunta siempre hacia la excelencia y un ancla que nos une a nuestras raíces.</p>
            <p>Nuestros colores, el azul profundo del océano y el dorado del sol naciente, representan la profundidad del conocimiento y el resplandor de quienes lo alcanzan. No tememos las tormentas del tiempo, pues estamos construidos sobre cimientos sólidos de valores, ética y amor por Colombia.</p>
            <p>Cada graduado que cruza nuestras puertas lleva consigo el sello de esta casa: honestidad, excelencia, servicio y gratitud. ¡Así navegan los nuestros hacia sus propios horizontes!</p>
          </div>
          <div class="letter-signature">
            <div class="sig-name">Hermana Leonor Castaño · Rectora Fundadora</div>
            <div class="sig-title">In Scientia Et Virtute ✦ 1979</div>
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