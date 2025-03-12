<?php
$current_page = 'projet_entreprise';
$page_title = 'Projets Entreprise';
include 'header.php';
?>

<div class="container">
  <section class="projet-section fade-in">
    <h1>Projets Entreprise</h1>
    <p class="section-intro">Découvrez les projets réalisés pendant mes stages en entreprise</p>

    <div class="projet-grid">
      <div class="projet-card">
        <img src="img/projet_entreprise1.jpg" alt="Projet 1" class="projet-image">
        <div class="projet-content">
          <h3>Application de Gestion des Stocks</h3>
          <p>Développement d'une application web pour la gestion des stocks et des commandes chez ECONOCOM.</p>
          <div class="projet-tags">
            <span class="projet-tag">PHP</span>
            <span class="projet-tag">MySQL</span>
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
        <img src="img/projet_entreprise2.jpg" alt="Projet 2" class="projet-image">
        <div class="projet-content">
          <h3>Site Intranet</h3>
          <p>Création d'un site intranet pour la communication interne et la gestion des documents.</p>
          <div class="projet-tags">
            <span class="projet-tag">Laravel</span>
            <span class="projet-tag">Vue.js</span>
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
        <img src="img/projet_entreprise3.jpg" alt="Projet 3" class="projet-image">
        <div class="projet-content">
          <h3>Application de Support Client</h3>
          <p>Développement d'une application de support client avec système de tickets et suivi des demandes.</p>
          <div class="projet-tags">
            <span class="projet-tag">React</span>
            <span class="projet-tag">Node.js</span>
            <span class="projet-tag">MongoDB</span>
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