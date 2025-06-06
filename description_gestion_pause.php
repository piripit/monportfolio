<?php
$current_page = 'description_gestion_pause.php';
$page_title = 'Description gestion des pauses';
include 'header.php';
?>

<!-- Section Hero des Projets -->
<section class="projects-hero fade-in">
    <div class="container">
        <div class="section-header text-center">
            <h1>Gestion des Pauses des Employés</h1>
            <div class="title-bar"></div>
            <p class="section-description">
                Découvrez les détails du projet de gestion des pauses
            </p>
        </div>
    </div>
</section>

<!-- Section Description -->
<section class="projects-section fade-in">
    <div class="container">
        <div class="card shadow-lg rounded-4">
            <div class="card-body">
                <h3 class="mb-3">📌 Nom du Projet : <strong>Gestion des pauses des Employés</strong></h3>
                <hr>

                <h4 class="mt-4">📝 Description du projet</h4>
                <p>Le Système de Gestion des Pauses est une application web conçue pour gérer les pauses des employés dans un environnement de travail.
                    Il permet aux employés de réserver des créneaux de pause,
                    d'activer leurs pauses au moment de les prendre,
                    et aux administrateurs de suivre l'utilisation des pauses en temps réel.
                    .</p>
                <ul>
                    <li>Créneaux de pause (matin et après-midi)</li>
                    <li>3 employés maximum par créneau</li>
                    <li>Supervision en temps réel</li>
                    <li>Historique des pauses</li>
                </ul>
                <a href="fichier/cdc-pause.pdf" class="btn btn-outline-primary mt-2" target="_blank">📄 Voir le Cahier des Charges</a>

                <h4 class="mt-4">🛠️ Technologies Utilisées</h4>
                <ul>
                    <li><strong>Langage :</strong> PHP</li>
                    <li><strong>Base de Données :</strong> MySQL</li>
                    <li><strong>Interface :</strong> HTML / CSS / Bootstrap</li>
                    <li><strong>IDE :</strong> Visual Studio Code</li>
                </ul>

                <h4 class="mt-4">🧑‍💻 Ce que j'ai réalisé</h4>
                <ul>
                    <li>Conception base de données avec tables `admins`, `employés`, `break_slots`, `break_reservations`</li>
                    <li>Système d'authentification simple pour les admins</li>
                    <li>Règles métiers : 3 personnes max / 2 pauses par jour</li>
                    <li>Interface admin temps réel</li>
                    <li>Documentation complète + diagramme Gantt</li>
                </ul>
                <h4 class="mt-4">🧑‍💻 Difficultés rencontrées</h4>
                <ul>
                    <li>Mettre en place les règles métiers</li>
                    <li>Comment gerer les erreurs de connexion</li>
                    <li>Gérer le statut de la pause( sur la page de consultation des pauses)</li>
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
                            <td>Documentation complète</td>
                            <td><a href="fichier/documentation-complète-pauses.pdf" target="_blank">Voir</a></td>
                        </tr>
                        <tr>
                            <td>Diagramme de Gantt</td>
                            <td><a href="fichier/gant-pause.pdf" target="_blank">Voir</a></td>
                        </tr>
                        <tr>
                            <td>Modèle base de données</td>
                            <td><a href="fichier/modèle_bdd-pause.pdf" target="_blank">Accéder</a></td>
                        </tr>
                        <tr>
                            <td>Guide d'utilisation admin</td>
                            <td><a href="fichier/guide-utilisation-admin.pdf" target="_blank">Voir</a></td>
                        </tr>
                        <tr>
                            <td>Guide d'utilisation employés</td>
                            <td><a href="fichier/guide-utilisation-employé.pdf" target="_blank">Voir</a></td>
                        </tr>
                    </tbody>
                </table>

                <h4 class="mt-4">🔗 Fonctionnalités principales</h4>
                <ul>
                    <li>✅ Inscription à un créneau de pause (10 min)</li>
                    <li>✅ Vérification de la limite de 3 personnes max</li>
                    <li>✅ Vue administrateur en temps réel</li>
                    <li>✅ Historique des pauses par utilisateur</li>
                </ul>

                <h4 class="mt-4">📷 Aperçu de l'interface</h4>
                <img src="img/pause.PNG" class="img-fluid rounded" alt="Aperçu de l'interface">

                <h4 class="mt-4">💬 Commentaire personnel</h4>
                <blockquote class="blockquote">
                    Ce projet m'a permis de developper mes compétences:
                    <br></br>
                    <ul>
                        <li>Analyser les objectifs et les modalités d’organisation d’un projet</li>
                        <li>Planifier les activités</li>
                        <li>Évaluer les indicateurs de suivi d’un projet et analyser les écarts</li>
                        <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.</li>
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