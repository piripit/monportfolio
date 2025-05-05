<?php
$page_title = "Formation";
$current_page = "ecole";
include 'header.php';
?>

<div class="container">
  <section class="formation-section">
    <div class="section-header">
      <h2>Ma Formation</h2>
      <p>Découvrez mon parcours académique et les compétences acquises</p>
    </div>

    <div class="formation-timeline">
      <div class="formation-item">
        <div class="formation-date">2023 - 2025</div>
        <div class="formation-content">
          <h2>BTS Services Informatiques aux Organisations</h2>
          <h3>Option SLAM (Solutions Logicielles et Applications Métiers)</h3>
          <p>Formation en alternance à MyDigitalSchool Angers</p>
          <ul class="formation-skills">
            <li>Développement Web</li>
            <li>Programmation Orientée Objet</li>
            <li>Bases de données</li>
            <li>Cybersécurité</li>
            <li>Gestion de projet</li>
          </ul>
        </div>
      </div>

      <div class="formation-item">
        <div class="formation-date">2022 - 2023</div>
        <div class="formation-content">
          <h2>Licence Mathématiques-Informatique</h2>
          <h3>Parcours Informatique</h3>
          <p>Universite Picardie Jules Verne, Amiens</p>
          <ul class="formation-skills">
            <li>Programmation</li>
            <li>Developpement web et réseau</li>
            <li>Mathématiques avancées</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="competences-section">
      <h2>Compétences Techniques</h2>
      <div class="competences-grid">
        <div class="competence-card">
          <i class="fas fa-code"></i>
          <h3>Développement Web</h3>
          <ul>
            <li>HTML/CSS/JavaScript</li>
            <li>Bootstrap</li>
            <li>PHP</li>
            <li>Laravel</li>
            <li>React</li>
            <li>Node.js</li>
          </ul>
        </div>

        <div class="competence-card">
          <i class="fas fa-database"></i>
          <h3>Bases de données</h3>
          <ul>
            <li>MySQL</li>
            <li>MariaDB</li>
            <li>SQLite</li>
            <li>Modélisation UML</li>
          </ul>
        </div>

        <div class="competence-card">
          <i class="fas fa-shield-alt"></i>
          <h3>Sécurité</h3>
          <ul>
            <li>Audit de sécurité</li>
            <li>Bonnes pratiques</li>
          </ul>
        </div>

        <div class="competence-card">
          <i class="fas fa-tasks"></i>
          <h3>Méthodologies</h3>
          <ul>
            <li>Agile / Scrum</li>
            <li>Git / GitHub</li>
            <li>Tests unitaires</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>