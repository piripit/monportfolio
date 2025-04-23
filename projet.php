<?php
$current_page = 'projets';
$page_title = 'Mes Projets';
include 'header.php';
?>

<!-- Section Hero des Projets -->
<section class="projects-hero fade-in">
  <div class="container">
    <div class="section-header text-center">
      <h1>Mes Réalisations</h1>
      <div class="title-bar"></div>
      <p class="section-description">
        Découvrez mes projets les plus récents et les technologies utilisées
      </p>
    </div>
  </div>
</section>

<!-- Section Projets -->
<section class="projects-section fade-in">
  <div class="container">
    <div class="projects-grid">
      <!-- Projet 1 -->
      <div class="project-card">
        <div class="project-image">
          <img src="img/pause.PNG" alt="Projet 1">
          <div class="project-overlay">
            <div class="project-links">
              <a href="#" class="project-link" title="Voir le site">
                <i class="fas fa-external-link-alt"></i>
              </a>
              <a href="#" class="project-link" title="Voir le code">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="project-content">
          <h3>Gestion de pause</h3>
          <p>Le Système de Gestion des Pauses est une application web conçue pour gérer les pauses des employés dans un environnement de travail.
            Il permet aux employés de réserver des créneaux de pause,
            d'activer leurs pauses au moment de les prendre,
            et aux administrateurs de suivre l'utilisation des pauses en temps réel..</p>
          <div class="project-tags">
            <span class="project-tag">HTML/CSS/JS</span>
            <span class="project-tag">Bootstrap</span>
            <span class="project-tag">PHP</span>
            <span class="project-tag">MySQL</span>
          </div>
        </div>
      </div>

      <!-- Projet 2 -->
      <div class="project-card">
        <div class="project-image">
          <img src="assets/images/projet2.jpg" alt="Projet 2">
          <div class="project-overlay">
            <div class="project-links">
              <a href="#" class="project-link" title="Voir le site">
                <i class="fas fa-external-link-alt"></i>
              </a>
              <a href="#" class="project-link" title="Voir le code">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="project-content">
          <h3>Nom du Projet 2</h3>
          <p>Description détaillée du projet et de ses fonctionnalités principales.</p>
          <div class="project-tags">
            <span class="project-tag">React</span>
            <span class="project-tag">Node.js</span>
            <span class="project-tag">MongoDB</span>
          </div>
        </div>
      </div>

      <!-- Projet 3 -->
      <div class="project-card">
        <div class="project-image">
          <img src="assets/images/projet3.jpg" alt="Projet 3">
          <div class="project-overlay">
            <div class="project-links">
              <a href="#" class="project-link" title="Voir le site">
                <i class="fas fa-external-link-alt"></i>
              </a>
              <a href="#" class="project-link" title="Voir le code">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="project-content">
          <h3>Nom du Projet 3</h3>
          <p>Description détaillée du projet et de ses fonctionnalités principales.</p>
          <div class="project-tags">
            <span class="project-tag">Laravel</span>
            <span class="project-tag">MySQL</span>
            <span class="project-tag">Bootstrap</span>
          </div>
        </div>
      </div>

      <!-- Projet 4 -->
      <div class="project-card">
        <div class="project-image">
          <img src="assets/images/projet4.jpg" alt="Projet 4">
          <div class="project-overlay">
            <div class="project-links">
              <a href="#" class="project-link" title="Voir le site">
                <i class="fas fa-external-link-alt"></i>
              </a>
              <a href="#" class="project-link" title="Voir le code">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="project-content">
          <h3>Nom du Projet 4</h3>
          <p>Description détaillée du projet et de ses fonctionnalités principales.</p>
          <div class="project-tags">
            <span class="project-tag">Vue.js</span>
            <span class="project-tag">Firebase</span>
            <span class="project-tag">Tailwind CSS</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>