<?php
$current_page = 'ecole';
$page_title = 'Formation';
include 'header.php';
?>

<div class="container">
  <section class="ecole-section fade-in">
    <h1>Ma Formation</h1>
    <p class="section-intro">Mon parcours académique et mes compétences acquises</p>

    <div class="formation-timeline">
      <div class="formation-item">
        <div class="formation-date">2023 - 2024</div>
        <div class="formation-content">
          <h2>BTS SIO - Option SLAM</h2>
          <h3>Lycée Saint-Joseph</h3>
          <p>Formation en développement d'applications et solutions logicielles</p>
          <ul class="formation-skills">
            <li>Développement Web</li>
            <li>Programmation Orientée Objet</li>
            <li>Bases de données</li>
            <li>Cybersécurité</li>
          </ul>
        </div>
      </div>

      <div class="formation-item">
        <div class="formation-date">2021 - 2023</div>
        <div class="formation-content">
          <h2>Baccalauréat STI2D</h2>
          <h3>Lycée Saint-Joseph</h3>
          <p>Spécialisation en systèmes d'information et numérique</p>
          <ul class="formation-skills">
            <li>Programmation</li>
            <li>Réseaux</li>
            <li>Électronique</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="competences-section">
      <h2>Compétences Acquises</h2>
      <div class="competences-grid">
        <div class="competence-card">
          <i class="fas fa-code"></i>
          <h3>Programmation</h3>
          <ul>
            <li>HTML5 / CSS3</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>Python</li>
          </ul>
        </div>
        <div class="competence-card">
          <i class="fas fa-database"></i>
          <h3>Bases de Données</h3>
          <ul>
            <li>MySQL</li>
            <li>PostgreSQL</li>
            <li>MongoDB</li>
          </ul>
        </div>
        <div class="competence-card">
          <i class="fas fa-shield-alt"></i>
          <h3>Sécurité</h3>
          <ul>
            <li>Cybersécurité</li>
            <li>Protection des données</li>
            <li>Audit de sécurité</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>