<?php include 'includes/header.php'; ?>

<!-- Header de la página -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="section-title">Galería</h1>
        <p class="section-subtitle">Nuestras instalaciones y ambiente de aprendizaje</p>
      </div>
    </div>
  </div>
</section>

<!-- Galería -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <!-- Foto 1 -->
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&q=80" 
               alt="Aula de computación" 
               class="img-fluid rounded shadow">
        </div>
      </div>
      
      <!-- Foto 2 -->
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80" 
               alt="Estudiantes aprendiendo" 
               class="img-fluid rounded shadow">
        </div>
      </div>
      
      <!-- Foto 3 -->
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=800&q=80" 
               alt="Ambiente de trabajo" 
               class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card-custom text-center p-5" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
          <h2 class="text-white mb-3">¿Quieres Conocer Mas?</h2>
          <p class="text-white mb-4">Visitanos y conoce dónde estudiarás</p>
          <a href="contacto.php" class="btn-primary-custom">Agendar Visita</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>