<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projets - Mon Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <nav class="navbar">
    <ul class="menu">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="about.php">À propos</a></li>
      <li><a href="ecole.php">Formation</a></li>
      <li><a href="entreprise.php">Entreprise</a></li>
      <li><a class="active" href="projet.php">Projets</a></li>
      <li><a href="veille.php">Veille</a></li>
      <li><a href="tableau.php">Tableau</a></li>
    </ul>
  </nav>

  <div class="container">
    <section class="projet-section fade-in">
      <h1>Mes Projets</h1>
      <p class="section-intro">Découvrez mes différents projets, qu'ils soient académiques ou professionnels.</p>

      <div class="projet-categories">
        <a href="projet_cours.php" class="projet-category">
          <i class="fas fa-graduation-cap"></i>
          <h2>Projets Académiques</h2>
          <p>Les projets réalisés pendant ma formation</p>
        </a>
        <a href="projet_entreprise.php" class="projet-category">
          <i class="fas fa-briefcase"></i>
          <h2>Projets Entreprise</h2>
          <p>Les projets réalisés en stage</p>
        </a>
      </div>
    </section>
  </div>

  <button class="theme-toggle" aria-label="Basculer le mode sombre">
    <i class="fas fa-moon"></i>
  </button>

  <script src="script/theme.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          }
        });
      }, {
        threshold: 0.1
      });

      document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
    });
  </script>
</body>

</html>