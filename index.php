<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COESCON — Consejo Estud</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&family=Pirata+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <!-- Widget flotante de accesibilidad para ajustar contraste, texto y tamaño de fuente. -->
  <button id="a11y-btn" aria-label="Accesibilidad" aria-expanded="false" aria-controls="a11y-panel" onclick="toggleA11y()">
    <svg viewBox="0 0 24 24"><path d="M12 2a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm8 5H4l3 8h3l1 7h2l1-7h3z"/></svg>
  </button>
  <div id="a11y-panel" role="dialog" aria-label="Opciones de accesibilidad">
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
<!-- Fin del widget de accesibilidad -->

  <!-- Contenido principal del portal que se muestra una vez autenticado. -->
  <div id="main-site">
    <header id="navbar" class="site-header">
      <div class="container header-inner">
        <a href="index.php" class="nav-logo">
          <div class="emblem">CO</div>
          <span>COESCON</span>
        </a>
        <ul class="nav-links">
          <li><a href="index.php" class="nav-home">Inicio</a></li>
          <li><a href="quienes-somos.html">Quiénes Somos</a></li>
          <li><a href="manual.html">Manual</a></li>
          <li><a href="historia.html">Historia</a></li>
          <li><a href="actividades.html">Actividades</a></li>
          <li><a href="equipo.html">Equipo</a></li>
          <li><a href="contacto.php" class="">Contáctanos</a></li>
          <li><a href="registrar.php" class="">Registrar</a></li>
          <li><a href="iniciar.php" class="nav">Iniciar Sesión</a></li>
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

    <main>
      <section class="hero">
        <div class="container hero-content reveal">
          <div class="hero-text">
            <p class="section-label">Consejo Estudiantil</p>
            <h1>Bienvenido a COESCON</h1>
            <p class="hero-lead">Impulsamos la participación estudiantil con claridad, actividades relevantes y espacios de voz dentro de la universidad.</p>
            <div class="hero-actions">
              <a class="button button-primary" href="quienes-somos.html">Quiénes Somos</a>
              <a class="button button-secondary" href="actividades.html">Actividades</a>
            </div>
            <div class="hero-summary">
              <div>
                <strong>+ Ideas</strong>
                <span>Proyectos estudiantiles que conectan.</span>
              </div>
              <div>
                <strong>+ Apoyo</strong>
                <span>Apoyo real para tu experiencia universitaria.</span>
              </div>
              <div>
                <strong>+ Participación</strong>
                <span>Más estudiantes involucrados en decisiones.</span>
              </div>
            </div>
          </div>
          <div class="hero-visual">
            <div class="hero-card-stack">
              <div class="card">Actividades</div>
              <div class="card">Historias</div>
              <div class="card">Equipo</div>
            </div>
          </div>
        </div>
      </section>

      <section id="home-sections" class="section-block reveal">
        <div class="container">
          <div class="section-label">Secciones</div>
          <h2 class="section-title">Explora cada área del sitio</h2>
          <p class="section-sub">Navega por las páginas dedicadas a nuestra historia, actividades, equipo y contacto.</p>
          <div class="home-grid">
            <a href="quienes-somos.html" class="home-card">
              <h3>Quiénes Somos</h3>
              <p>Conoce nuestro propósito, valores y misión como consejo estudiantil.</p>
            </a>
            <a href="historia.html" class="home-card">
              <h3>Historia</h3>
              <p>Descubre cómo se construyó COESCON y las etapas clave de su crecimiento.</p>
            </a>
            <a href="actividades.html" class="home-card">
              <h3>Actividades</h3>
              <p>Explora los proyectos y eventos en los que puedes participar.</p>
            </a>
            <a href="equipo.html" class="home-card">
              <h3>Equipo</h3>
              <p>Conoce al grupo de estudiantes detrás de nuestras iniciativas.</p>
            </a>
            <a href="contacto.php" class="home-card">
              <h3>Contáctanos</h3>
              <p>Envía tus dudas, propuestas o deseos de participar.</p>
            </a>
          </div>
        </div>
      </section>

      <section class="section-block reveal">
        <div class="container">
          <div class="section-label">Destacado</div>
          <h2 class="section-title">Un espacio más completo para ti</h2>
          <p class="section-sub">Estas pequeñas secciones te ayudan a encontrar rápido lo más importante del sitio.</p>
          <div class="home-grid">
            <div class="home-card">
              <h3>Información clara</h3>
              <p>Todo el contenido ordenado para que no pierdas tiempo buscando lo que necesitas.</p>
            </div>
            <div class="home-card">
              <h3>Participa fácil</h3>
              <p>Encuentra las actividades y propuestas abiertas para estudiantes desde el primer vistazo.</p>
            </div>
            <div class="home-card">
              <h3>Contacto directo</h3>
              <p>Siempre hay una forma rápida de comunicarte con el equipo y recibir respuesta.</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container footer-grid reveal">
        <div>
          <a class="brand footer-brand" href="index.html">COESCON</a>
          <p>Cómite Escolar de Convivencia</p>
        </div>
        <div class="footer-col">
          <h4>Acceso rápido</h4>
          <ul>
            <li><a href="quienes-somos.html">Quiénes Somos</a></li>
            <li><a href="historia.html">Historia</a></li>
            <li><a href="actividades.html">Actividades</a></li>
            <li><a href="equipo.html">Equipo</a></li>
            <li><a href="contacto.php">Contáctanos</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© 2026 COESCON — Todos los derechos reservados</span>
        <div class="footer-links">
          <a href="#">Política de privacidad</a>
          <a href="#">Términos de uso</a>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/script.js"></script>
</body>
</html>
