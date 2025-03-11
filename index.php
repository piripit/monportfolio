<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Portfolio professionnel - Développeur Web et Technicien de support informatique" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js" defer></script>
  <title>Mon Portfolio - Développeur Web</title>
</head>

<body>
  <div class="container">
    <header>
      <nav class="entete" aria-label="Navigation principale">
        <ul class="menu">
          <li><a href="#" aria-current="page">Accueil</a></li>
          <li><a href="about.php">À propos & Compétences</a></li>
          <li><a href="ecole.php">Formation</a></li>
          <li><a href="projet.php">Projets</a></li>
          <li><a href="entreprise.php">Entreprise</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section class="corps fade-in">
        <div class="cgauche">
          <span class="textB">Bonjour</span>
          <h1>Je suis <span id="textDefile" aria-label="texte animé"></span></h1>
          <p>Apprenti Développeur Web | Technicien de support informatique</p>
          <div class="buton">
            <button id="cvDownloadBtn" aria-label="Télécharger mon CV">
              <span>Télécharger CV</span>
            </button>
            <button id="linkedin-btn" aria-label="Visiter mon profil LinkedIn">
              <span>LinkedIn</span>
            </button>
          </div>
        </div>
        <div class="cdroite">
          <div class="grpimg" aria-hidden="true">
            <img src="img/splah-removebg.png" id="splah" alt="Effet visuel décoratif" />
            <img src="img/mol-removebg (1).png" alt="Image principale du portfolio" />
          </div>
        </div>
      </section>

      <section id="contact" class="section fade-in">
        <div class="section-header">
          <h2>Contact</h2>
          <p>N'hésitez pas à me contacter pour discuter de vos projets ou opportunités de collaboration.</p>
        </div>
        <form class="contact-form" action="process_contact.php" method="POST">
          <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="subject">Sujet</label>
            <input type="text" id="subject" name="subject" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn-primary">Envoyer</button>
        </form>
      </section>
    </main>
  </div>

  <div id="cvModal" class="modal" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-content">
      <h2 id="modalTitle">Votre CV</h2>
      <button class="close" onclick="closeModal()" aria-label="Fermer la fenêtre">×</button>
      <div class="download-btn">
        <a href="fichier/Cv.pdf" download="Cv.pdf" class="btn-primary">
          Télécharger CV
        </a>
      </div>
    </div>
  </div>

  <button class="theme-toggle" aria-label="Basculer le mode sombre">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
    </svg>
  </button>

  <script src="script/main.js" defer></script>
</body>

</html>