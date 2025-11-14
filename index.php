<?php include 'includes/header.php'; ?>

<!-- Hero Section con Particles.js de fondo -->
<section class="hero" id="particles-hero">
  <!-- Canvas de particles.js se genera aquí automáticamente -->
  <div class="container hero-content">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <!-- data-aos: animación de AOS (aparece desde abajo con fade) -->
        <h1 data-aos="fade-up" data-aos-duration="1000">
          Aprende Tecnología con NextGen
        </h1>
        <!-- data-aos-delay: espera 200ms después del título -->
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          Tu academia de informática en Presidente Franco. Cursos prácticos de diseño web y ofimática para comenzar tu carrera digital.
        </p>
        <!-- Botones con delay mayor para efecto escalonado -->
        <div class="d-flex gap-3 flex-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
          <a href="cursos.php" class="btn-primary-custom">Ver Cursos</a>
          <a href="contacto.php" class="btn-outline-custom">Contactar</a>
        </div>
      </div>
      
      <!-- CTA lateral con sticky - se quedará flotando al hacer scroll -->
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="cta-lateral-sticky" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
          <div class="cta-lateral p-4 bg-white rounded-4 shadow-lg">
            <h4 class="text-dark mb-3">¡Inscríbete Ahora!</h4>
            <p class="text-muted mb-4">Cupos limitados para 2026</p>
            <a href="contacto.php" class="btn btn-primary w-100 rounded-pill py-2">Solicitar Información</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Bienvenida con animaciones AOS -->
<section class="py-5">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col-12">
        <!-- zoom-in: aparece con efecto de zoom desde el centro -->
        <h2 class="section-title" data-aos="zoom-in">¿Por qué elegir NextGen?</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
          Formación práctica y personalizada para tu futuro digital
        </p>
      </div>
    </div>
    
    <!-- Cards con animaciones escalonadas (cada una aparece después de la otra) -->
    <div class="row g-4">
      <div class="col-md-4">
        <!-- fade-up: aparece desde abajo -->
        <div class="card-custom h-100" data-aos="fade-up" data-aos-delay="100">
          <div class="card-body text-center">
            <div class="card-icon mx-auto">💻</div>
            <h4 class="mb-3">Clases Prácticas</h4>
            <p class="text-muted">Aprende haciendo. Todos nuestros cursos son 80% práctica y 20% teoría.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-custom h-100" data-aos="fade-up" data-aos-delay="200">
          <div class="card-body text-center">
            <div class="card-icon mx-auto">👨‍🏫</div>
            <h4 class="mb-3">Profesores Expertos</h4>
            <p class="text-muted">Instructores con experiencia real en el campo de la tecnología.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-custom h-100" data-aos="fade-up" data-aos-delay="300">
          <div class="card-body text-center">
            <div class="card-icon mx-auto">📜</div>
            <h4 class="mb-3">Certificación</h4>
            <p class="text-muted">Recibe tu certificado oficial al completar cada curso exitosamente.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Cursos con animaciones desde los lados -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col-12">
        <h2 class="section-title" data-aos="zoom-in">Nuestros Cursos</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
          Programas diseñados para principiantes
        </p>
      </div>
    </div>
    
    <div class="row g-4">
      <!-- fade-right: aparece desde la izquierda -->
      <div class="col-md-6">
        <div class="card-custom" data-aos="fade-right" data-aos-duration="800">
          <div class="card-body">
            <div class="card-icon">🎨</div>
            <h3 class="mb-3">Diseño Web</h3>
            <p class="text-muted mb-4">
              Aprende a crear sitios web modernos desde cero. HTML, CSS, Bootstrap y más. 
              Ideal para quienes quieren iniciar en el desarrollo web.
            </p>
            <ul class="list-unstyled text-muted mb-4">
              <li>✓ HTML5 y CSS3</li>
              <li>✓ Bootstrap Framework</li>
              <li>✓ Diseño Responsive</li>
              <li>✓ Proyectos reales</li>
            </ul>
            <a href="cursos.php#diseno-web" class="btn btn-outline-primary rounded-pill">Más información</a>
          </div>
        </div>
      </div>
      
      <!-- fade-left: aparece desde la derecha -->
      <div class="col-md-6">
        <div class="card-custom" data-aos="fade-left" data-aos-duration="800">
          <div class="card-body">
            <div class="card-icon">📊</div>
            <h3 class="mb-3">Ofimática Básica</h3>
            <p class="text-muted mb-4">
              Domina las herramientas esenciales de oficina. Word, Excel, PowerPoint y más.
              Perfecto para mejorar tu productividad laboral.
            </p>
            <ul class="list-unstyled text-muted mb-4">
              <li>✓ Microsoft Word</li>
              <li>✓ Microsoft Excel</li>
              <li>✓ Microsoft PowerPoint</li>
              <li>✓ Certificación incluida</li>
            </ul>
            <a href="cursos.php#ofimatica" class="btn btn-outline-primary rounded-pill">Más información</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Final con animación de zoom -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card-custom" data-aos="zoom-in" data-aos-duration="1000" 
             style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
          <div class="card-body text-center text-white py-5">
            <h2 class="mb-3">¿Listo para comenzar tu carrera digital?</h2>
            <p class="mb-4 fs-5">Únete a NextGen y transforma tu futuro profesional</p>
            <a href="contacto.php" class="btn-primary-custom">Contáctanos Ahora</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Scripts de librerías externas -->
<!-- Particles.js: crea el efecto de partículas animadas -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

<!-- AOS: animaciones al hacer scroll -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
// Inicializar AOS (Animate On Scroll)
// once: false = la animación se repite cada vez que haces scroll
// duration: velocidad global de animaciones
AOS.init({
  duration: 800,
  once: true, // cambiar a false si quieres que se repita
  offset: 100 // distancia en px antes de activar la animación
});

// Configuración de Particles.js
particlesJS('particles-hero', {
  particles: {
    number: {
      value: 80, // cantidad de partículas
      density: {
        enable: true,
        value_area: 800 // área donde se distribuyen
      }
    },
    color: {
      value: '#ffffff' // color de las partículas (blanco)
    },
    shape: {
      type: 'circle', // forma: circle, edge, triangle, polygon
    },
    opacity: {
      value: 0.5, // transparencia (0-1)
      random: false,
      anim: {
        enable: true,
        speed: 1,
        opacity_min: 0.1,
        sync: false
      }
    },
    size: {
      value: 3, // tamaño de las partículas
      random: true,
      anim: {
        enable: false
      }
    },
    line_linked: {
      enable: true, // líneas que conectan partículas
      distance: 150, // distancia máxima para conectar
      color: '#ffffff',
      opacity: 0.4,
      width: 1
    },
    move: {
      enable: true,
      speed: 2, // velocidad de movimiento
      direction: 'none', // dirección: none, top, bottom, left, right
      random: false,
      straight: false,
      out_mode: 'out', // qué pasa al salir del área
      bounce: false,
    }
  },
  interactivity: {
    detect_on: 'canvas',
    events: {
      onhover: {
        enable: true,
        mode: 'repulse' // partículas se alejan del cursor
      },
      onclick: {
        enable: true,
        mode: 'push' // añade partículas al hacer click
      },
      resize: true
    },
    modes: {
      repulse: {
        distance: 100, // distancia de repulsión
        duration: 0.4
      },
      push: {
        particles_nb: 4 // cantidad de partículas a añadir
      }
    }
  },
  retina_detect: true // soporte para pantallas retina
});
</script>

<?php include 'includes/footer.php'; ?>