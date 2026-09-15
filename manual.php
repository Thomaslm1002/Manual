<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Manual de convivencia de COESCON.">
  <title>COESCON | Manual de convivencia</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/manual.css">
  <script src="js/script.js" defer></script>
  <script src="js/manual.js" defer></script>
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
  <nav id="navbar">
    <a href="index.php" class="nav-logo">
      <div class="emblem">CO</div>
      <span>COESCON</span>
    </a>
    <ul class="nav-links">
      <li><a href="index.php" class="nav-home">Inicio</a></li>
      <li><a href="quienes-somos.php">Quiénes Somos</a></li>
      <li><a href="Manual.html" class="active">Manual</a></li>
      <li><a href="Historia.html">Historia</a></li>
      <li><a href="actividades.php">Actividades</a></li>
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
    <a href="quienes-somos.php" onclick="closeMobileMenu()">Quiénes Somos</a>
    <a href="Manual.html" onclick="closeMobileMenu()">Manual</a>
    <a href="Historia.html" onclick="closeMobileMenu()">Historia</a>
    <a href="actividades.php" onclick="closeMobileMenu()">Actividades</a>
    <a href="equipo.html" onclick="closeMobileMenu()">Equipo</a>
    <a href="contacto.php" onclick="closeMobileMenu()">Contáctanos</a>
  </div>

  <main>
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy">
          <span class="eyebrow">Manual de convivencia</span>
          <h1>Construimos una comunidad con respeto, conciencia y dignidad.</h1>
          <p>
            Este manual recoge los principios, derechos y deberes que orientan nuestra convivencia,
            fortalecen la identidad del grupo y promueven soluciones justas, humanas y responsables.
          </p>
          <div class="hero-actions">
            <a href="#principios" class="btn btn-primary">Ver principios</a>
            <a href="#derechos" class="btn btn-secondary">Nuestros derechos</a>
          </div>
          <ul class="hero-list" aria-label="Valores principales">
            <li>Respeto</li>
            <li>Participación</li>
            <li>Seguridad</li>
          </ul>
        </div>

        <div class="hero-panel" aria-label="Resumen del manual">
          <div class="stat-card card-strong">
            <span class="label">Base</span>
            <strong>4</strong>
            <p>pilares de convivencia: respeto, responsabilidad, inclusión y diálogo.</p>
          </div>
          <div class="stat-card">
            <span class="label">Objetivo</span>
            <h3>Ambiente sano</h3>
            <p>Garantizar un espacio de aprendizaje seguro, equitativo y digno para todas las personas.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="principios" class="section container">
      <div class="section-head">
        <span class="eyebrow accent">Principios</span>
        <h2>Lo que orienta nuestra convivencia</h2>
      </div>

      <div class="feature-grid">
        <article class="feature-card">
          <div class="icon">01</div>
          <h3>Respeto</h3>
          <p>Reconocer la dignidad de cada persona y valorar las diferencias sin exclusión ni violencia.</p>
        </article>
        <article class="feature-card">
          <div class="icon">02</div>
          <h3>Responsabilidad</h3>
          <p>Actuar con honestidad, cumplimiento y cuidado de los espacios, tiempos y relaciones.</p>
        </article>
        <article class="feature-card">
          <div class="icon">03</div>
          <h3>Participación</h3>
          <p>Expresar ideas, escuchar, aportar y decidir de forma responsable dentro de la comunidad.</p>
        </article>
        <article class="feature-card">
          <div class="icon">04</div>
          <h3>Inclusión</h3>
          <p>Promover condiciones de igualdad para que todas las personas puedan pertenecer y crecer.</p>
        </article>
      </div>
    </section>

    <section class="section section-dark">
      <div class="container">
        <div class="section-head light">
          <span class="eyebrow accent">Normas esenciales</span>
          <h2>Reglas que protegen a la comunidad</h2>
        </div>

        <div class="rules-grid">
          <article class="rule-card">
            <span class="rule-tag">1</span>
            <h3>Trato digno</h3>
            <p>Se prohíben el acoso, la discriminación, las amenazas y cualquier conducta que afecte la integridad de otras personas.</p>
          </article>
          <article class="rule-card">
            <span class="rule-tag">2</span>
            <h3>Uso responsable</h3>
            <p>Los espacios, herramientas y recursos de la institución deben usarse con cuidado, sentido colectivo y finalidad académica.</p>
          </article>
          <article class="rule-card">
            <span class="rule-tag">3</span>
            <h3>Honestidad</h3>
            <p>La autenticidad en el trabajo académico, la comunicación y las decisiones fortalece la confianza institucional.</p>
          </article>
          <article class="rule-card">
            <span class="rule-tag">4</span>
            <h3>Diálogo</h3>
            <p>Antes de resolver un conflicto, se prioriza la escucha, la conversación y la mediación con actitud constructiva.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="derechos" class="section container">
      <div class="section-head">
        <span class="eyebrow accent">Derechos y deberes</span>
        <h2>Un marco para vivir con dignidad</h2>
      </div>

      <div class="info-grid">
        <article class="info-panel">
          <h3>Derechos</h3>
          <ul>
            <li>Ser tratado con respeto y sin discriminación.</li>
            <li>Participar en un ambiente seguro y saludable.</li>
            <li>Expresar opiniones con libertad y responsabilidad.</li>
            <li>Solicitar orientación frente a situaciones de conflicto.</li>
          </ul>
        </article>

        <article class="info-panel alt">
          <h3>Deberes</h3>
          <ul>
            <li>Cumplir con las normas institucionales y acuerdos sociales.</li>
            <li>Respetar la propiedad, la diferencia y el espacio de otros.</li>
            <li>Contribuir a un clima de respeto, colaboración y solidaridad.</li>
            <li>Reportar situaciones que afecten la convivencia de forma responsable.</li>
          </ul>
        </article>
      </div>
    </section>

    <section class="section section-soft">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow accent">Proceso</span>
          <h2>Cómo se atiende una situación</h2>
        </div>

        <div class="timeline">
          <article class="timeline-step">
            <span>01</span>
            <h3>Escucha</h3>
            <p>Se recibe la denuncia o inquietud con atención, respeto y confidencialidad.</p>
          </article>
          <article class="timeline-step">
            <span>02</span>
            <h3>Valoración</h3>
            <p>Se revisa lo ocurrido, se identifican hechos y se analiza la gravedad de la situación.</p>
          </article>
          <article class="timeline-step">
            <span>03</span>
            <h3>Acción</h3>
            <p>Se aplican medidas proporcionales y pedagógicas según el caso y el contexto.</p>
          </article>
          <article class="timeline-step">
            <span>04</span>
            <h3>Seguimiento</h3>
            <p>Se acompaña la reparación, la reflexión y la prevención para evitar repetición.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="faq-wrap">
        <div class="faq-intro">
          <span class="eyebrow accent">Preguntas frecuentes</span>
          <h2>Lo más importante, explicado con claridad</h2>
        </div>

        <div class="faq-list">
          <div class="faq-item open">
            <button class="faq-question" type="button" aria-expanded="true">
              ¿Qué es la convivencia escolar?
            </button>
            <div class="faq-answer">
              <p>Es el conjunto de relaciones entre las personas de la comunidad educativa, basado en el respeto, la responsabilidad y la participación democrática.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">
              ¿Qué hacer si alguien agrede o discrimina a otra persona?
            </button>
            <div class="faq-answer">
              <p>Es importante denunciarlo por los canales institucionales, guardar la evidencia y buscar apoyo inmediato de autoridades o personal de orientación.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">
              ¿Las normas se aplican a todas las personas por igual?
            </button>
            <div class="faq-answer">
              <p>Sí. La diferencia está en la forma de atender cada caso, aplicando criterios de proporcionalidad, justicia y respeto al debido proceso.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-section">
      <div class="container cta-box">
        <div>
          <span class="eyebrow accent">Documento oficial</span>
          <h2>Consulta la guía completa</h2>
        </div>
        <a href="https://www.ups.edu.ec/sites/default/files/2021-09/manual-de-convivencia-2021.pdf" target="_blank" rel="noopener" class="btn btn-primary">Descargar manual</a>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo">COESCON</div>
        <p>Cómite Escolar De Convivencia. Quince años construyendo una universidad más justa, democrática y comprometida con su gente.</p>
      </div>
      <div class="footer-col">
        <h4>Navegación</h4>
        <ul>
          <li><a href="quienes-somos.php">Quiénes Somos</a></li>
          <li><a href="Historia.html">Historia</a></li>
          <li><a href="actividades.php">Actividades</a></li>
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