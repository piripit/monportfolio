<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo isset($page_title) ? $page_title : 'Accueil'; ?> - Mon Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body data-theme="light">
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <b>M</b>on Portfolio
            </a>
            <button class="hamburger-menu" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="menu">
                <li><a href="index.php" <?php echo isset($current_page) && $current_page === 'index' ? 'class="active"' : ''; ?>>Accueil</a></li>
                <li><a href="about.php" <?php echo isset($current_page) && $current_page === 'about' ? 'class="active"' : ''; ?>>À propos</a></li>
                <li><a href="ecole.php" <?php echo isset($current_page) && $current_page === 'ecole' ? 'class="active"' : ''; ?>>Formation</a></li>
                <li><a href="entreprise.php" <?php echo isset($current_page) && $current_page === 'entreprise' ? 'class="active"' : ''; ?>>Entreprise</a></li>
                <li><a href="réalisation.php" <?php echo isset($current_page) && $current_page === 'projet' ? 'class="active"' : ''; ?>>Réalisations</a></li>
                <li><a href="veille.php" <?php echo isset($current_page) && $current_page === 'veille' ? 'class="active"' : ''; ?>>Veille</a></li>
                <li><a href="tableau.php" <?php echo isset($current_page) && $current_page === 'tableau' ? 'class="active"' : ''; ?>>Compétences</a></li>
            </ul>
        </div>
    </nav>
    <!-- Le reste du contenu vient après cette balise -->

    <script>
        // Script pour le menu hamburger
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.querySelector('.hamburger-menu');
            const menu = document.querySelector('.menu');

            if (hamburger && menu) {
                hamburger.addEventListener('click', function() {
                    this.classList.toggle('active');
                    menu.classList.toggle('active');
                    document.body.classList.toggle('menu-open');
                });

                // Ferme le menu quand on clique sur un lien
                const menuLinks = menu.querySelectorAll('a');
                menuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        hamburger.classList.remove('active');
                        menu.classList.remove('active');
                        document.body.classList.remove('menu-open');
                    });
                });

                // Ferme le menu quand on clique à l'extérieur
                document.addEventListener('click', function(event) {
                    if (menu.classList.contains('active') &&
                        !menu.contains(event.target) &&
                        !hamburger.contains(event.target)) {
                        hamburger.classList.remove('active');
                        menu.classList.remove('active');
                        document.body.classList.remove('menu-open');
                    }
                });
            }
        });
    </script>
</body>

</html>