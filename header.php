<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - Mon Portfolio</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <ul class="menu">
            <li><a href="index.php" <?php echo $current_page === 'index' ? 'class="active"' : ''; ?>>Accueil</a></li>
            <li><a href="about.php" <?php echo $current_page === 'about' ? 'class="active"' : ''; ?>>À propos</a></li>
            <li><a href="ecole.php" <?php echo $current_page === 'ecole' ? 'class="active"' : ''; ?>>Formation</a></li>
            <li><a href="entreprise.php" <?php echo $current_page === 'entreprise' ? 'class="active"' : ''; ?>>Entreprise</a></li>
            <li><a href="projet.php" <?php echo $current_page === 'projet' ? 'class="active"' : ''; ?>>Projets</a></li>
            <li><a href="veille.php" <?php echo $current_page === 'veille' ? 'class="active"' : ''; ?>>Veille</a></li>
            <li><a href="tableau.php" <?php echo $current_page === 'tableau' ? 'class="active"' : ''; ?>>Tableau</a></li>
        </ul>
    </nav>
</body>

</html>