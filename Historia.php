<!DOCTYPE html>
<!-- Página de historia institucional donde se narran los hitos de COESCON. -->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COESCON — Historia</title>
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
      <li><a href="manual.html">Manual</a></li>
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

  <!-- Sección de historia institucional y evolución del consejo. -->
  <section id="historia">
    <div class="container">
      <div class="reveal">
        <div class="section-label">Historia</div>
        <h2 class="section-title">Una navegación de<br>quince años valientes</h2>
        <p class="section-sub">Desde una pequeña asamblea en el aula 301 hasta convertirnos en referente estudiantil nacional, nuestra historia es la historia de cada generación que creyó en el cambio.</p>
      </div>

      <div class="reveal">
        <div class="pirate-letter">
          <div class="pirate-wax">☠</div>
          <h3>— Carta Fundacional —</h3>
          <p>A bordo del navío más humilde que jamás surque los mares del conocimiento, nosotros, los primeros tripulantes del COESCON, escribimos este juramento con tinta de compromisos y papel de sueños universitarios.</p>
          <p>Que ninguna tormenta burocrática, ningún temporal de injusticia académica, ni las traicioneras corrientes de la apatía puedan hundir este barco que hoy botamos al agua. Hemos levado el ancla del conformismo y desplegado las velas de la participación estudiantil.</p>
          <p>Juramos defender a nuestra tripulación — cada estudiante en sus días de bonanza y en sus noches de naufragio — con el mismo espíritu aventurero de quienes se lanzan a lo desconocido con el corazón como única brújula.</p>
          <p><em>Que esta misión nunca cese. Que la bandera del COESCON ize siempre en aguas libres.</em></p>
          <div class="signature">⚓ Los Fundadores, Anno MMIX ⚓</div>
        </div>
        <div class="torn-edge"></div>
      </div>

      <div class="timeline reveal">
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <div class="timeline-year">2009 — Fundación</div>
            <h3>El nacimiento de COESCON</h3>
            <p>Un grupo de 12 estudiantes visionarios se reunió en el aula 301 para fundar el primer Cómite Escolar De Convivencia. Sin recursos, pero con una determinación inquebrantable.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <div class="timeline-year">2012 — Reconocimiento</div>
            <h3>Reconocimiento institucional oficial</h3>
            <p>Después de tres años de trabajo persistente, la administración universitaria reconoció formalmente a COESCON como órgano representativo con voz y voto en el consejo directivo.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <div class="timeline-year">2016 — Expansión</div>
            <h3>Red estudiantil regional</h3>
            <p>COESCON lideró la creación de una alianza con 8 consejos estudiantiles de universidades vecinas, ampliando su impacto y alcance en la región.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <div class="timeline-year">2020 — Resiliencia</div>
            <h3>Liderazgo en la crisis digital</h3>
            <p>Durante la pandemia, COESCON fue pionero en adaptar los procesos de representación estudiantil al entorno virtual, garantizando que ninguna voz quedara sin ser escuchada.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <div class="timeline-year">2024 — Presente</div>
            <h3>Quince años de impacto continuo</h3>
            <p>Hoy, COESCON representa a más de 2,400 estudiantes activos, con 38 proyectos ejecutados y un legado de transformación que define el ADN de nuestra institución.</p>
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