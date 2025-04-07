<?php
$current_page = 'index';
$page_title = 'Accueil';
include 'header.php';
?>

<!-- Section Héro -->
<section class="hero-section fade-in">
  <div class="container">
    <div class="hero-content">
      <div class="hero-text">
        <h1>Bienvenue sur mon Portfolio</h1>
        <div class="hero-subtitle">Étudiant en BTS SIO option SLAM</div>
        <p class="hero-description">
          Passionné par le développement web et les nouvelles technologies,
          je mets mes compétences au service de projets innovants.
        </p>
        <div class="hero-buttons">
          <a href="about.php" class="btn btn-primary">En savoir plus</a>
          <a href="#contact" class="btn btn-outline">Me contacter</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Compétences -->
<section class="skills-section fade-in">
  <div class="container">
    <div class="section-header">
      <h2>Mes Compétences</h2>
      <div class="title-bar"></div>
    </div>
    <div class="skills-grid">
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fas fa-code"></i>
        </div>
        <h3>Développement Web</h3>
        <p>HTML, CSS, JavaScript, PHP, MySQL</p>
      </div>
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3>Développement Mobile</h3>
        <p>Applications natives et cross-platform</p>
      </div>
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fas fa-database"></i>
        </div>
        <h3>Bases de Données</h3>
        <p>Conception et optimisation</p>
      </div>
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fas fa-server"></i>
        </div>
        <h3>Administration Système</h3>
        <p>Gestion de serveurs et infrastructures</p>
      </div>
    </div>
  </div>
</section>

<!-- Section Contact -->
<section id="contact" class="contact-section fade-in">
  <div class="container">
    <div class="section-header">
      <h2>Me Contacter</h2>
      <div class="title-bar"></div>
      <p class="section-description">N'hésitez pas à me contacter pour toute question ou opportunité de collaboration</p>
    </div>
    <div class="contact-content">

      <div class="contact-form">
        <form action="contact.php" method="POST" class="professional-form">
          <div class="form-group">
            <label for="name">Nom complet</label>
            <input type="text" id="name" name="name" placeholder="Votre nom complet" required>
          </div>
          <div class="form-group">
            <label for="email">Email professionnel</label>
            <input type="email" id="email" name="email" placeholder="votre.email@entreprise.com" required>
          </div>
          <div class="form-group">
            <label for="subject">Sujet</label>
            <input type="text" id="subject" name="subject" placeholder="Objet de votre message" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
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