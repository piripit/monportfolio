<?php
$current_page = 'entreprise';
$page_title = 'Entreprise';
include 'header.php';
?>

<div class="container">
    <section class="entreprise-section fade-in">
        <h1>Expérience chez ECONOCOM</h1>
        <p class="section-intro">Découvrez mon expérience en tant que technicien niveau 1 chez Econocom</p>

        <div class="entreprise-content">
            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-building"></i>
                    <h2>Présentation de l'Entreprise</h2>
                </div>
                <p>Entreprise : <a href="https://www.econocom.com/fr" target="_blank" class="entreprise-link">ECONOCOM</a> (Prestataire pour la SNCF)</p>
                <p>Poste : Technicien Niveau 1</p>
                <p>Localisation : Saint-Herblain</p>
                <p>Période : 01/09/2024 - 31/08/2025</p>
                <p>Description : En tant que technicien niveau 1, je suis en charge du support utilisateur et de la maintenance informatique pour les agents de la SNCF.</p>
            </div>

            <div class="missions-grid">
                <div class="mission-card">
                    <h3><i class="fas fa-tools"></i> Outils et Technologies</h3>
                    <ul class="mission-list">
                        <li>ServiceNow : Gestion des incidents</li>
                        <li>Active Directory : Gestion des comptes</li>
                        <li>Prise en main à distance</li>
                        <li>PowerTech : Gestion des postes</li>
                    </ul>
                </div>

                <div class="mission-card">
                    <h3><i class="fas fa-code"></i> Projet Réalisé</h3>
                    <h4>Application de Gestion des Pauses</h4>
                    <ul class="mission-list">
                        <li>Refonte de l'application</li>
                        <li>Interface utilisateur intuitive</li>
                        <li>Intégration système</li>
                        <li>Tests et déploiement</li>
                    </ul>
                    <a href="description_gestion_pause.php" class="btn btn-primary" target="_blank">
                        <i class="fas fa-file-alt"></i> Voir le projet
                    </a>
                </div>

                <div class="mission-card">
                    <h3><i class="fas fa-tasks"></i> Missions</h3>
                    <ul class="mission-list">
                        <li>Support utilisateur</li>
                        <li>Gestion des incidents</li>
                        <li>Maintenance préventive</li>
                        <li>Formation des utilisateurs</li>
                        <li>Développement d'application</li>
                    </ul>
                </div>
            </div>

            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-graduation-cap"></i>
                    <h2>Compétences Acquises</h2>
                </div>
                <ul class="mission-list">
                    <li>Outils de support informatique</li>
                    <li>Gestion des incidents et demandes</li>
                    <li>Administration système</li>
                    <li>Support utilisateur à distance</li>
                    <li>Développement d'applications</li>
                    <li>Travail en équipe</li>
                </ul>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>

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