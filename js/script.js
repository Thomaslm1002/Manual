// Genera una capa decorativa de partículas para la pantalla de autenticación.
const particlesContainer = document.getElementById('particles');
if (particlesContainer) {
  for (let i = 0; i < 25; i++) {
    const s = document.createElement('span');
    s.style.cssText = `left:${Math.random() * 100}%;width:${4 + Math.random() * 8}px;height:${4 + Math.random() * 8}px;animation-duration:${8 + Math.random() * 12}s;animation-delay:${Math.random() * 8}s`;
    particlesContainer.appendChild(s);
  }
}

const AUTH_KEY = 'coescon-authenticated';

function readAuthState() {
  try {
    return sessionStorage.getItem(AUTH_KEY) === 'true';
  } catch (error) {
    return false;
  }
}

function saveAuthState(isAuthenticated) {
  try {
    sessionStorage.setItem(AUTH_KEY, String(isAuthenticated));
  } catch (error) {
    console.warn('No se pudo guardar la sesión:', error);
  }
}

function showAuthScreen() {
  const auth = document.getElementById('auth-screen');
  const main = document.getElementById('main-site');

  if (auth) {
    auth.style.display = 'flex';
    auth.style.opacity = '1';
    auth.style.transform = 'none';
    auth.style.transition = '';
  }

  if (main) {
    main.classList.add('visible');
  }

  document.body.classList.add('auth-overlay-active');
  document.body.style.overflow = '';
  saveAuthState(false);
}

function hideAuthScreen(animated = true) {
  const auth = document.getElementById('auth-screen');
  const main = document.getElementById('main-site');

  if (auth) {
    if (animated) {
      auth.style.transition = 'opacity 0.45s ease, transform 0.45s ease';
      auth.style.opacity = '0';
      auth.style.transform = 'scale(1.02)';
      setTimeout(() => {
        auth.style.display = 'none';
        auth.style.opacity = '1';
        auth.style.transform = 'none';
      }, 450);
    } else {
      auth.style.display = 'none';
      auth.style.opacity = '1';
      auth.style.transform = 'none';
    }
  }

  if (main) {
    main.classList.add('visible');
  }

  document.body.classList.remove('auth-overlay-active');
  saveAuthState(true);
}

// Cambia entre el formulario de inicio de sesión y registro.
function switchTab(btn, form) {
  const targetTab = btn && btn.classList.contains('auth-tab')
    ? btn
    : document.querySelector(`.auth-tab[data-form="${form}"]`);

  document.querySelectorAll('.auth-tab').forEach(tab => {
    tab.classList.remove('active');
    tab.setAttribute('aria-selected', 'false');
  });

  if (targetTab) {
    targetTab.classList.add('active');
    targetTab.setAttribute('aria-selected', 'true');
  }

  const login = document.getElementById('form-login');
  const register = document.getElementById('form-register');
  if (login && register) {
    if (form === 'login') {
      login.classList.remove('hidden');
      register.classList.add('hidden');
      login.style.display = 'flex';
      register.style.display = 'none';
    } else {
      register.classList.remove('hidden');
      login.classList.add('hidden');
      register.style.display = 'flex';
      login.style.display = 'none';
    }
  }
}

// Muestra el contenido principal al ingresar al portal.
function enterSite() {
  hideAuthScreen(true);
}

// Revisa si la sesión ya fue guardada para mostrar el contenido principal sin repetir el formulario.
function initializeAuthUI() {
  const auth = document.getElementById('auth-screen');
  const main = document.getElementById('main-site');
  const loginTab = document.querySelector('.auth-tab.active');

  if (readAuthState()) {
    if (auth && main) {
      auth.style.display = 'none';
      auth.style.opacity = '1';
      auth.style.transform = 'none';
      main.classList.add('visible');
      document.body.classList.remove('auth-overlay-active');
      document.body.style.overflow = '';
    }
  } else {
    showAuthScreen();
  }

  if (loginTab) {
    switchTab(loginTab, 'login');
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initializeAuthUI);
} else {
  initializeAuthUI();
}

// Agrega un efecto visual al navbar al desplazarse por la página.
window.addEventListener('scroll', () => {
  const nb = document.getElementById('navbar');
  if (nb) nb.classList.toggle('scrolled', window.scrollY > 20);
});

// Abre y cierra el menú móvil del sitio.
function toggleMenu() {
  const h = document.getElementById('hamburger');
  const m = document.getElementById('mobile-menu');
  if (h && m) {
    h.classList.toggle('open');
    m.classList.toggle('open');
  }
}

// Cierra el menú móvil cuando se selecciona una opción.
function closeMobileMenu() {
  const h = document.getElementById('hamburger');
  const m = document.getElementById('mobile-menu');
  if (h) h.classList.remove('open');
  if (m) m.classList.remove('open');
}

// Marca visualmente la opción del navbar según la página cargada.
function highlightActiveNav() {
  const currentPath = (window.location.pathname.split('/').pop() || 'index.html').toLowerCase();
  const navLinks = Array.from(document.querySelectorAll('.nav-links a, .mobile-menu a'));

  navLinks.forEach(link => {
    const href = link.getAttribute('href') || '';
    const linkPath = (href.split('/').pop() || '').toLowerCase();
    const isHome = currentPath === '' || currentPath === 'index.html';
    const isLinkHome = linkPath === '' || linkPath === 'index.html';

    if ((isHome && isLinkHome) || (!isHome && linkPath === currentPath)) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
}

window.addEventListener('DOMContentLoaded', highlightActiveNav);
window.addEventListener('load', highlightActiveNav);

const track = document.getElementById('carousel');
if (track) {
  let isDragging = false;
  let startX = 0;
  let scrollStart = 0;

  track.addEventListener('mousedown', e => {
    isDragging = true;
    startX = e.pageX - track.offsetLeft;
    scrollStart = track.scrollLeft;
    track.classList.add('grabbing');
  });

  document.addEventListener('mouseup', () => {
    isDragging = false;
    track.classList.remove('grabbing');
  });

  document.addEventListener('mousemove', e => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - track.offsetLeft;
    track.scrollLeft = scrollStart - (x - startX);
  });

  track.addEventListener('scroll', () => {
    const dots = document.querySelectorAll('.carousel-dot');
    const idx = Math.round(track.scrollLeft / 310);
    dots.forEach((d, i) => d.classList.toggle('active', i === idx));
  });
}

function moveCarousel(dir) {
  if (!track) return;
  track.scrollBy({ left: dir * 310, behavior: 'smooth' });
}

// Controla la visibilidad del panel de accesibilidad.
let panelOpen = false;
function toggleA11y() {
  panelOpen = !panelOpen;
  const panel = document.getElementById('a11y-panel');
  const button = document.getElementById('a11y-btn');
  panel?.classList.toggle('open', panelOpen);
  button?.setAttribute('aria-expanded', String(panelOpen));
}

// Activa o desactiva el contraste alto del sitio.
function toggleContrast(btn) {
  if (!btn) return;
  btn.classList.toggle('on');
  document.body.classList.toggle('high-contrast');
}

// Activa o desactiva un texto más grande en la interfaz.
function toggleText(btn) {
  if (!btn) return;
  btn.classList.toggle('on');
  document.body.classList.toggle('large-text');
}

// Ajusta el tamaño base de la fuente del documento.
let fSize = 16;
function changeFontSize(d) {
  fSize = Math.max(12, Math.min(22, fSize + d));
  document.documentElement.style.fontSize = fSize + 'px';
}

// Muestra los elementos con efecto de aparición al entrar al viewport.
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) entry.target.classList.add('visible');
  });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// Simula el envío de un mensaje en el formulario de contacto.
function sendMessage(btn) {
  if (!btn) return;
  const orig = btn.innerHTML;
  btn.innerHTML = '<svg width="18" height="18" fill="white" viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg> Mensaje enviado';
  btn.style.background = '#15803d';
  setTimeout(() => {
    btn.innerHTML = orig;
    btn.style.background = '';
  }, 3500);
}
