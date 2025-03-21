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
                <p>Localisation : 10 chemin de vigneau, Saint-Herblain</p>
                <p>Période : 01/09/2024 - 31/08/2025</p>
                <p>Description : En tant que technicien niveau 1, je suis en charge du support utilisateur et de la maintenance informatique pour les agents de la SNCF. Mon rôle consiste à assurer le bon fonctionnement des outils informatiques et à apporter une assistance technique de premier niveau.</p>
            </div>

            <div class="missions-grid">
                <div class="mission-card">
                    <i class="fas fa-tools"></i>
                    <h3>Outils et Technologies</h3>
                    <ul class="mission-list">
                        <li>ServiceNow : Gestion des incidents et des demandes</li>
                        <li>Active Directory : Gestion des comptes utilisateurs</li>
                        <li>Prise en main à distance : Support utilisateur</li>
                        <li>PowerTech : Identification et gestion des postes</li>
                        <li>Vérification des identités du personnel SNCF</li>
                    </ul>
                </div>

                <div class="mission-card">
                    <i class="fas fa-code"></i>
                    <h3>Projet Réalisé chez ECONOCOM</h3>
                    <h4>Application de Gestion des Pauses</h4>
                    <ul class="mission-list">
                        <li>Refonte complète de l'application de pause</li>
                        <li>Développement d'une interface utilisateur intuitive</li>
                        <li>Intégration avec les systèmes existants</li>
                        <li>Tests et déploiement en production</li>
                    </ul>
                    <a href="cahier_des_charges.pdf" class="btn btn-primary" target="_blank">
                        <i class="fas fa-file-alt"></i> Voir le Cahier des Charges
                    </a>
                </div>

                <div class="mission-card">
                    <i class="fas fa-tasks"></i>
                    <h3>Missions Principales</h3>
                    <ul class="mission-list">
                        <li>Support utilisateur de premier niveau</li>
                        <li>Gestion des incidents informatiques</li>
                        <li>Maintenance préventive et curative</li>
                        <li>Formation des utilisateurs</li>
                        <li>Documentation technique</li>
                    </ul>
                    <h3>Missions Secondaires</h3>
                    <ul class="mission-list">
                        <li>Développement d'application métier pour ECONOCOM</li>
                        <li>Documentation technique de l'application de pause</li>
                    </ul>
                </div>
            </div>

            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-graduation-cap"></i>
                    <h2>Compétences Acquises</h2>
                </div>
                <ul class="mission-list">
                    <li>Maîtrise des outils de support informatique</li>
                    <li>Gestion des incidents et des demandes</li>
                    <li>Administration système (Active Directory)</li>
                    <li>Support utilisateur à distance</li>
                    <li>Développement d'applications métier</li>
                    <li>Travail en équipe et communication</li>
                    <li>Gestion des priorités et respect des SLA</li>
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