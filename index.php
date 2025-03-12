<?php
$current_page = 'index';
$page_title = 'Accueil';
include 'header.php';
?>

<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text">
      <span class="welcome-text">Bienvenue sur mon portfolio</span>
      <h1>FIATUWO Moriel</h1>
      <p class="hero-description">
        Passionné par le développement web et les nouvelles technologies, je crée des expériences numériques innovantes et performantes.
      </p>
      <div class="cta-buttons">
        <a href="about.php" class="btn">
          <i class="fas fa-user"></i>
          À propos de moi
        </a>
        <a href="projet.php" class="btn">
          <i class="fas fa-code"></i>
          Mes projets
        </a>
      </div>
    </div>
    <div class="hero-image">
      <div class="splash-effect">
        <img src="img/splah-removebg.png" alt="Effet de fond">
      </div>
      <img src="img/mol-removebg (1).png" alt="Photo de profil" class="profile-img">
    </div>
  </div>
</section>

<section class="features-section">
  <div class="container">
    <div class="section-header">
      <h2>Mes Compétences</h2>
      <p>Technologies et outils que je maîtrise</p>
    </div>
    <div class="features-grid">
      <div class="feature-card">
        <i class="fas fa-code"></i>
        <h3>Développement Front-end</h3>
        <p>HTML5, CSS3, JavaScript, React</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-server"></i>
        <h3>Développement Back-end</h3>
        <p>PHP, MySQL, Node.js</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-mobile-alt"></i>
        <h3>Design Responsive</h3>
        <p>Adaptation mobile-first</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-paint-brush"></i>
        <h3>UI/UX Design</h3>
        <p>Interfaces modernes et intuitives</p>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact-section">
  <div class="section-header">
    <h2>Contactez-moi</h2>
    <p>N'hésitez pas à me contacter pour discuter de votre projet</p>
  </div>
  <div class="contact-form">
    <form action="process_contact.php" method="POST">
      <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn">Envoyer</button>
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>