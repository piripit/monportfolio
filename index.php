<?php
$current_page = 'index';
$page_title = 'Accueil';
include 'header.php';
?>

<!-- Section Héro avec Animation -->
<section class="hero-section fade-in">
  <div class="container">
    <div class="hero-content">
      <div class="hero-text">
        <h1>FIATUWO Moriel</h1>
        <div class="hero-subtitle">Étudiant en BTS SIO option SLAM</div>
        <p class="hero-description">
          Je transforme des idées en solutions digitales innovantes.<br>
          Spécialisé dans le développement web et les technologies modernes.
        </p>
        <div class="hero-buttons">
          <a href="about.php" class="btn btn-primary">
            <i class="fas fa-user-circle"></i>
            Mon Profil
          </a>
          <a href="#contact" class="btn btn-outline">
            <i class="fas fa-paper-plane"></i>
            Me Contacter
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Compétences avec Cards Interactives -->
<section class="skills-section fade-in">
  <div class="container">
    <div class="section-header">
      <h2>Mes Compétences</h2>
      <div class="title-bar"></div>
      <p class="section-description">
        Un ensemble de compétences techniques et professionnelles au service de vos projets
      </p>
    </div>
    <div class="skills-grid">
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fas fa-code"></i>
        </div>
        <h3>Développement Web</h3>
        <p>Création de sites web modernes et responsives avec HTML5, CSS3, JavaScript et PHP</p>
        <ul class="skill-list">
          <li>React.js</li>
          <li>Node.js</li>
          <li>PHP/MySQL</li>
        </ul>
      </div>

      <div class="skill-card">
        <div class="skill-icon">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3>Développement Mobile</h3>
        <p>Développement d'applications mobiles natives et cross-platform</p>
        <ul class="skill-list">
          <li>React Native</li>
          <li>Flutter</li>
          <li>Progressive Web Apps</li>
        </ul>
      </div>

      <div class="skill-card">
        <div class="skill-icon">
          <i class="fas fa-database"></i>
        </div>
        <h3>Bases de Données</h3>
        <p>Conception et gestion de bases de données relationnelles et NoSQL</p>
        <ul class="skill-list">
          <li>MySQL</li>
          <li>MongoDB</li>
          <li>PostgreSQL</li>
        </ul>
      </div>

      <div class="skill-card">
        <div class="skill-icon">
          <i class="fas fa-server"></i>
        </div>
        <h3>DevOps</h3>
        <p>Administration système et déploiement d'applications</p>
        <ul class="skill-list">
          <li>Git</li>
          <li>Docker</li>
          <li>CI/CD</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Section Contact Améliorée -->
<section id="contact" class="contact-section fade-in">
  <div class="container">
    <div class="section-header">
      <h2>Me Contacter</h2>
      <div class="title-bar"></div>
      <p class="section-description">
        Vous avez un projet en tête ? N'hésitez pas à me contacter pour en discuter !
      </p>
    </div>
    <div class="contact-content">
      <div class="contact-form">
        <form action="contact.php" method="POST" class="professional-form">
          <div class="form-group">
            <label for="name">
              <i class="fas fa-user"></i>
              Nom complet
            </label>
            <input type="text" id="name" name="name" placeholder="Votre nom complet" required>
          </div>

          <div class="form-group">
            <label for="email">
              <i class="fas fa-envelope"></i>
              Email professionnel
            </label>
            <input type="email" id="email" name="email" placeholder="votre.email@entreprise.com" required>
          </div>

          <div class="form-group">
            <label for="subject">
              <i class="fas fa-heading"></i>
              Sujet
            </label>
            <input type="text" id="subject" name="subject" placeholder="Objet de votre message" required>
          </div>

          <div class="form-group">
            <label for="message">
              <i class="fas fa-comment-alt"></i>
              Message
            </label>
            <textarea id="message" name="message" placeholder="Décrivez votre projet ou votre demande" required></textarea>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-paper-plane"></i>
              Envoyer le message
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>