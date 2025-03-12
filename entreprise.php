<?php
$current_page = 'entreprise';
$page_title = 'Entreprise';
include 'header.php';
?>

<div class="container">
    <section class="entreprise-section fade-in">
        <h1>Mon Stage en Entreprise</h1>
        <p class="section-intro">Découvrez mon expérience professionnelle et les missions réalisées</p>

        <div class="entreprise-content">
            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-building"></i>
                    <h2>Présentation de l'Entreprise</h2>
                </div>
                <p>Nom de l'entreprise : [Nom de l'entreprise]</p>
                <p>Localisation : [Ville, Pays]</p>
                <p>Période de stage : [Date de début] - [Date de fin]</p>
                <p>Description de l'entreprise : [Description détaillée]</p>
            </div>

            <div class="missions-grid">
                <div class="mission-card">
                    <i class="fas fa-code"></i>
                    <h3>Développement Web</h3>
                    <ul class="mission-list">
                        <li>Création de sites web responsifs</li>
                        <li>Développement d'applications web</li>
                        <li>Maintenance et mise à jour de sites existants</li>
                    </ul>
                </div>

                <div class="mission-card">
                    <i class="fas fa-database"></i>
                    <h3>Bases de Données</h3>
                    <ul class="mission-list">
                        <li>Conception de schémas de bases de données</li>
                        <li>Optimisation des requêtes SQL</li>
                        <li>Gestion des données et sauvegardes</li>
                    </ul>
                </div>

                <div class="mission-card">
                    <i class="fas fa-tasks"></i>
                    <h3>Projets Réalisés</h3>
                    <ul class="mission-list">
                        <li>Projet 1 : [Description]</li>
                        <li>Projet 2 : [Description]</li>
                        <li>Projet 3 : [Description]</li>
                    </ul>
                </div>
            </div>

            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-graduation-cap"></i>
                    <h2>Compétences Acquises</h2>
                </div>
                <ul class="mission-list">
                    <li>Maîtrise des technologies web modernes</li>
                    <li>Expérience en développement d'applications</li>
                    <li>Travail en équipe et communication</li>
                    <li>Gestion de projet et respect des délais</li>
                </ul>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>

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