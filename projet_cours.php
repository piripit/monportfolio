<?php
$current_page = 'projet_cours';
$page_title = 'Projets Cours';
include 'header.php';
?>

<div class="container">
  <section class="projet-section fade-in">
    <h1>Projets Académiques</h1>
    <p class="section-intro">Découvrez les projets réalisés dans le cadre de ma formation</p>

    <div class="projet-grid">
      <div class="projet-card">
        <img src="img/projet_cours1.jpg" alt="Projet 1" class="projet-image">
        <div class="projet-content">
          <h3>Application de Gestion des Notes</h3>
          <p>Développement d'une application web pour la gestion des notes et des moyennes des étudiants.</p>
          <div class="projet-tags">
            <span class="projet-tag">PHP</span>
            <span class="projet-tag">MySQL</span>
            <span class="projet-tag">Bootstrap</span>
          </div>
          <div class="projet-links">
            <a href="#" class="projet-link">
              <i class="fas fa-external-link-alt"></i>
              Voir le projet
            </a>
            <a href="#" class="projet-link">
              <i class="fab fa-github"></i>
              Code source
            </a>
          </div>
        </div>
      </div>

      <div class="projet-card">
        <img src="img/projet_cours2.jpg" alt="Projet 2" class="projet-image">
        <div class="projet-content">
          <h3>Site Vitrine E-commerce</h3>
          <p>Création d'un site e-commerce complet avec panier, paiement et gestion des commandes.</p>
          <div class="projet-tags">
            <span class="projet-tag">HTML5</span>
            <span class="projet-tag">CSS3</span>
            <span class="projet-tag">JavaScript</span>
          </div>
          <div class="projet-links">
            <a href="#" class="projet-link">
              <i class="fas fa-external-link-alt"></i>
              Voir le projet
            </a>
            <a href="#" class="projet-link">
              <i class="fab fa-github"></i>
              Code source
            </a>
          </div>
        </div>
      </div>

      <div class="projet-card">
        <img src="img/projet_cours3.jpg" alt="Projet 3" class="projet-image">
        <div class="projet-content">
          <h3>Application Mobile</h3>
          <p>Développement d'une application mobile cross-platform pour la gestion des tâches.</p>
          <div class="projet-tags">
            <span class="projet-tag">React Native</span>
            <span class="projet-tag">Firebase</span>
            <span class="projet-tag">Redux</span>
          </div>
          <div class="projet-links">
            <a href="#" class="projet-link">
              <i class="fas fa-external-link-alt"></i>
              Voir le projet
            </a>
            <a href="#" class="projet-link">
              <i class="fab fa-github"></i>
              Code source
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>

<button class="theme-toggle" aria-label="Basculer le mode sombre">
  <i class="fas fa-moon"></i>
</button>

<script src="script/theme.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, {
      threshold: 0.1
    });

    document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
  });
</script>