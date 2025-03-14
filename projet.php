<?php
$page_title = "Projets";
$current_page = "projet";
include 'header.php';
?>

<div class="container">
  <section class="projet-section">
    <div class="section-header">
      <h2>Mes Projets</h2>
      <p>Découvrez mes réalisations et projets personnels</p>
    </div>

    <div class="projet-grid">
      <!-- Projet 1 -->
      <div class="projet-card fade-in">
        <div class="projet-image">
          <img src="img/projet1.jpg" alt="Projet 1">
          <div class="projet-overlay">
            <div class="projet-links">
              <a href="#" class="projet-link"><i class="fas fa-external-link-alt"></i> Voir le projet</a>
              <a href="#" class="projet-link"><i class="fab fa-github"></i> Code source</a>
            </div>
          </div>
        </div>
        <div class="projet-content">
          <h3>Nom du Projet 1</h3>
          <p>Description détaillée du projet et de ses fonctionnalités principales.</p>
          <div class="projet-tags">
            <span class="projet-tag">HTML</span>
            <span class="projet-tag">CSS</span>
            <span class="projet-tag">JavaScript</span>
          </div>
        </div>
      </div>

      <!-- Projet 2 -->
      <div class="projet-card fade-in">
        <div class="projet-image">
          <img src="img/projet2.jpg" alt="Projet 2">
          <div class="projet-overlay">
            <div class="projet-links">
              <a href="#" class="projet-link"><i class="fas fa-external-link-alt"></i> Voir le projet</a>
              <a href="#" class="projet-link"><i class="fab fa-github"></i> Code source</a>
            </div>
          </div>
        </div>
        <div class="projet-content">
          <h3>Nom du Projet 2</h3>
          <p>Description détaillée du projet et de ses fonctionnalités principales.</p>
          <div class="projet-tags">
            <span class="projet-tag">PHP</span>
            <span class="projet-tag">MySQL</span>
            <span class="projet-tag">Laravel</span>
          </div>
        </div>
      </div>

      <!-- Projet 3 -->
      <div class="projet-card fade-in">
        <div class="projet-image">
          <img src="img/projet3.jpg" alt="Projet 3">
          <div class="projet-overlay">
            <div class="projet-links">
              <a href="#" class="projet-link"><i class="fas fa-external-link-alt"></i> Voir le projet</a>
              <a href="#" class="projet-link"><i class="fab fa-github"></i> Code source</a>
            </div>
          </div>
        </div>
        <div class="projet-content">
          <h3>Nom du Projet 3</h3>
          <p>Description détaillée du projet et de ses fonctionnalités principales.</p>
          <div class="projet-tags">
            <span class="projet-tag">React</span>
            <span class="projet-tag">Node.js</span>
            <span class="projet-tag">MongoDB</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>