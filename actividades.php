<!DOCTYPE html>
<!-- Página de actividades y proyectos del Consejo Estudiantil. -->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COESCON — Actividades</title>
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
    <a href="index.php" onclick="closeMobileMenu()">Inicio</a>
    <a href="quienes-somos.html" onclick="closeMobileMenu()">Quiénes Somos</a>
    <a href="historia.html" onclick="closeMobileMenu()">Historia</a>
    <a href="actividades.html" onclick="closeMobileMenu()">Actividades</a>
    <a href="equipo.html" onclick="closeMobileMenu()">Equipo</a>
    <a href="contacto.php" onclick="closeMobileMenu()">Contáctanos</a>
  </div>

  <!-- Sección de actividades destacadas con carrusel visual. -->
  <section id="actividades">
    <div class="carousel-header reveal">
      <div class="section-label">Actividades</div>
      <h2 class="section-title" style="color:white;">Hacemos que las<br>cosas sucedan</h2>
      <p class="section-sub">Desde ferias académicas hasta marchas por los derechos estudiantiles. Cada acción cuenta.</p>
    </div>

    <div class="carousel-track-wrapper">
      <div class="carousel-track" id="carousel">
        <div class="carousel-slide">
          <div class="slide-card">
            <div class="slide-img" style="background:linear-gradient(135deg,#0C447C,#378ADD);">🎓</div>
            <div class="slide-body">
              <div class="slide-tag">Academia</div>
              <h3>Feria de Oportunidades</h3>
              <p>Conectamos estudiantes con becas, pasantías y programas de intercambio internacionales.</p>
            </div>
          </div>
        </div>
        <div class="carousel-slide">
          <div class="slide-card">
            <div class="slide-img" style="background:linear-gradient(135deg,#185FA5,#85B7EB);">⚖️</div>
            <div class="slide-body">
              <div class="slide-tag">Derechos</div>
              <h3>Defensa Estudiantil</h3>
              <p>Acompañamos procesos disciplinarios y asesoramos en conflictos con la institución.</p>
            </div>
          </div>
        </div>
        <div class="carousel-slide">
          <div class="slide-card">
            <div class="slide-img" style="background:linear-gradient(135deg,#C9A84C,#F0D080);">🎭</div>
            <div class="slide-body">
              <div class="slide-tag">Cultura</div>
              <h3>Semana Cultural COESCON</h3>
              <p>Arte, música, teatro y expresión libre en una semana que redefine la identidad universitaria.</p>
            </div>
          </div>
        </div>
        <div class="carousel-slide">
          <div class="slide-card">
            <div class="slide-img" style="background:linear-gradient(135deg,#042C53,#185FA5);">🌱</div>
            <div class="slide-body">
              <div class="slide-tag">Bienestar</div>
              <h3>Campus Saludable</h3>
              <p>Programas de salud mental, nutrición y actividad física para la comunidad universitaria.</p>
            </div>
          </div>
        </div>
        <div class="carousel-slide">
          <div class="slide-card">
            <div class="slide-img" style="background:linear-gradient(135deg,#0C447C,#42A5F5);">💡</div>
            <div class="slide-body">
              <div class="slide-tag">Innovación</div>
              <h3>Hackathon Universitario</h3>
              <p>48 horas para resolver problemas reales del campus con tecnología y creatividad.</p>
            </div>
          </div>
        </div>
        <div class="carousel-slide">
          <div class="slide-card">
            <div class="slide-img" style="background:linear-gradient(135deg,#185FA5,#1DE9B6);">🗳️</div>
            <div class="slide-body">
              <div class="slide-tag">Democracia</div>
              <h3>Elecciones Transparentes</h3>
              <p>Procesos electorales con veeduría estudiantil, digitales y verificables en tiempo real.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-controls">
      <button class="carousel-btn" onclick="moveCarousel(-1)">←</button>
      <div class="carousel-dots" id="carousel-dots">
        <button class="carousel-dot active"></button>
        <button class="carousel-dot"></button>
        <button class="carousel-dot"></button>
        <button class="carousel-dot"></button>
        <button class="carousel-dot"></button>
        <button class="carousel-dot"></button>
      </div>
      <button class="carousel-btn" onclick="moveCarousel(1)">→</button>
    </div>
  </section>

  <footer>
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo">COESCON</div>
        <p>Cómite Escolar De Convivencia.</p>
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