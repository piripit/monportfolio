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
              <a href="description_gestion_pause.php" class="project-link" title="Voir le site">
                <i class="fas fa-external-link-alt"></i>
              </a>
              <a href="https://github.com/piripit/pause" class="project-link" title="Voir le code">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="project-content">
          <h3>Gestion de pause</h3>
          <p>Le Système de Gestion des Pauses est une application web pour organiser les pauses des employés.
            Les employés réservent et activent leurs pauses,
            tandis que les administrateurs les suivent en temps réel.</p>
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
          <img src="img/BienvenuFormation.PNG" alt="Projet 2">
          <div class="project-overlay">
            <div class="project-links">
              <a href="description_BienvenuFormation.php" class="project-link" title="Description">
                <i class="fas fa-external-link-alt"></i>
              </a>
              <a href="https://github.com/piripit/MDS" class="project-link" title="Voir le code">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="project-content">
          <h3>Bienvenue formation</h3>
          <p>
            Bienvenu Formation est une application web pour gérer les présences dans un établissement scolaire.
            Les élèves signent en ligne,
            les enseignants suivent les signatures,
            et les administrateurs gèrent l’ensemble.
          </p>
          <div class="project-tags">
            <span class="project-tag">HTML/CSS/JS</span>
            <span class="project-tag">PHP</span>
            <span class="project-tag">MySQL</span>
            <span class="project-tag">Bootstrap</span>
          </div>
        </div>
      </div>

      <!-- Projet 3 -->
      <div class="project-card">
        <div class="project-image">
          <img src="img/clickn-eat.PNG" alt="Projet 3">
          <div class="project-overlay">
            <div class="project-links">
              <a href="description_clickneat.php" class="project-link" title="Voir le site">
                <i class="fas fa-external-link-alt"></i>
              </a>
              <a href="https://github.com/piripit/clickn-eat" class="project-link" title="Voir le code">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="project-content">
          <h3>Clickn'eat</h3>
          <p>Click’n Eat est une application web qui facilite la gestion des restaurants en ligne.
            Elle permet de suivre menus,
            commandes et réservations en temps réel,
            pour une organisation fluide et adaptée aux clients.</p>
          <div class="project-tags">
            <span class="project-tag">HTML/CSS/JS</span>
            <span class="project-tag">Laravel</span>
            <span class="project-tag">MySQL</span>
            <span class="project-tag">Bootstrap</span>
          </div>
        </div>
      </div>

      <!-- Projet 4 -->
      <div class="project-card">
        <div class="project-image">
          <img src="img/portfolio.jpg" alt="Projet 4">
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
          <h3>Portfolio</h3>
          <p>Mon portfolio personnel, où je partage mes projets et mes compétences.</p>
          <div class="project-tags">
            <span class="project-tag">HTML/CSS/JS</span>
            <span class="project-tag">PHP</span>
            <span class="project-tag">MySQL</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>