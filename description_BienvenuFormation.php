<?php
$current_page = 'description_BienvenuFormation.php';
$page_title = 'Description Bienvenue Formation';
include 'header.php';
?>

<!-- Section Hero des Projets -->
<section class="projects-hero fade-in">
    <div class="container">
        <div class="section-header text-center">
            <h1>Bienvenue Formation</h1>
            <div class="title-bar"></div>
            <p class="section-description">
                Découvrez les détails du projet de gestion des signatures et des présences dans un établissement scolaire
            </p>
        </div>
    </div>
</section>

<!-- Section Description -->
<section class="projects-section fade-in">
    <div class="container">
        <div class="card shadow-lg rounded-4">
            <div class="card-body">
                <h3 class="mb-3">📌 Nom du Projet : <strong>Bienvenue Formation</strong></h3>
                <hr>

                <h4 class="mt-4">📝 Description du projet</h4>
                <p>Bienvenu Formation est une application web de gestion des signatures et des présences dans un établissement scolaire.
                    Elle permet aux enseignants de gérer les signatures des élèves,
                    aux élèves de signer leur présence,
                    et aux administrateurs de gérer l'ensemble du système.</p>
                <ul>
                    <li>gestion des utilisateurs</li>
                    <li>gestion des classes</li>
                    <li>gestion des matières</li>
                    <li>gestion des signatures</li>
                    <li>gestion des présences</li>
                    <li>gestion des statistiques</li>
                    <li>gestion de l'emploi du temps</li>
                    <li>gestion de l'historique des signatures</li>
                    <li>Interface admin temps réel</li>
                </ul>
                <a href="fichier/cdc-BF.pdf" class="btn btn-outline-primary mt-2" target="_blank">📄 Voir le Cahier des Charges</a>

                <h4 class="mt-4">🛠️ Technologies Utilisées</h4>
                <ul>
                    <li><strong>Langage :</strong> PHP Orienté Objet</li>
                    <li><strong>Base de Données :</strong> MySQL</li>
                    <li><strong>Interface :</strong> HTML / CSS / Bootstrap / JavaScript</li>
                    <li><strong>IDE :</strong> Visual Studio Code</li>
                </ul>

                <h4 class="mt-4">🧑‍💻 Ce que j'ai réalisé</h4>
                <ul>
                    <li>Conception base de données avec tables `admins`, `employés`, `break_slots`, `break_reservations`</li>
                    <li>gestion des utilisateurs</li>
                    <li>gestion des classes</li>
                    <li>gestion des matières</li>
                    <li>gestion des signatures</li>
                    <li>gestion des présences</li>
                    <li>gestion des statistiques</li>
                    <li>gestion de l'emploi du temps</li>
                    <li>gestion de l'historique des signatures</li>
                    <li>Interface admin temps réel</li>
                    <li>Documentation complète + diagramme Gantt</li>
                </ul>
                <h4 class="mt-4">🧑‍💻 Difficultés rencontrées</h4>
                <ul>
                    <li>Mettre en place l'emploi du temps</li>
                    <li>Gestion des signatures</li>
                    <li>Comment gerer les erreurs de connexion</li>
                    <li>la programmation orientée objet</li>
                </ul>

                <h4 class="mt-4">📚 Documents Disponibles</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Type de document</th>
                            <th>Lien</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Guide d'utilisation administrateur</td>
                            <td><a href="fichier/guide-utilisation-admin-Bf.pdf" target="_blank">Voir</a></td>
                        </tr>
                        <tr>
                            <td>Diagramme de Gantt</td>
                            <td><a href="img/gantt-bienvenu-formation.png" target="_blank">Voir</a></td>
                        </tr>
                        <tr>
                            <td>Modèle base de données</td>
                            <td><a href="img/modèle-bdd-Bf.png" target="_blank">Accéder</a></td>
                        </tr>
                        <tr>
                            <td>Guide d'utilisation élèves </td>
                            <td><a href="fichier/guide-utilisation-elève-Bf.pdf" target="_blank">Voir</a></td>
                        </tr>
                        <tr>
                            <td>Guide d'utilisation enseignants</td>
                            <td><a href="fichier/guide-utilisation-enseignant-Bf.pdf" target="_blank">Voir</a></td>
                        </tr>
                    </tbody>
                </table>

                <h4 class="mt-4">🔗 Fonctionnalités principales</h4>
                <ul>
                    <li>✅ Signature des élèves</li>
                    <li>✅ Visualisation des statistiques</li>
                    <li>✅ consultation de l'emploi du temps</li>
                    <li>✅ Historique des signatures</li>
                    <li>✅ Gestion des utilisateurs</li>
                    <li>✅ Gestion des classes</li>
                    <li>✅ Gestion des matières</li>
                </ul>

                <h4 class="mt-4">📷 Aperçu de l'interface</h4>
                <img src="img/BienvenuFormation.PNG" class="img-fluid rounded" alt="Aperçu de l'interface">

                <h4 class="mt-4">💬 Commentaire personnel</h4>
                <blockquote class="blockquote">
                    Ce projet m'a permis de developper mes compétences:
                    <br></br>
                    <ul>

                        <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.</li>
                        <li>Analyser les objectifs et les modalités d’organisation d’un projet</li>
                        <li>Planifier les activités</li>
                        <li>Évaluer les indicateurs de suivi d’un projet et analyser les écarts</li>
                        <li>Réaliser les tests d’intégration et d’acceptation d’un service</li>
                        <li>Déployer un service</li>
                        <li>Accompagner les utilisateurs dans la mise en place d’un service</li>
                    </ul>
                    <br></br>
                    
                </blockquote>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>