<?php
$current_page = 'description_clickneat.php';
$page_title = 'Description clickn-eat';
include 'header.php';
?>

<!-- Section Hero des Projets -->
<section class="projects-hero fade-in">
    <div class="container">
        <div class="section-header text-center">
            <h1>Clickn-eat</h1>
            <div class="title-bar"></div>
            <p class="section-description">
                Découvrez les détails du projet de clickn'eat
            </p>
        </div>
    </div>
</section>

<!-- Section Description -->
<section class="projects-section fade-in">
    <div class="container">
        <div class="card shadow-lg rounded-4">
            <div class="card-body">
                <h3 class="mb-3">📌 Nom du Projet : <strong>clickn-eat</strong></h3>
                <hr>

                <h4 class="mt-4">📝 Description du projet</h4>
                <p>Click'n Eat est une application web permettant aux clients
                    de réserver une table dans un restaurant et de commander leur repas à l'avance,
                    pour une expérience sans attente.</p>
                <ul>
                    <li>Gestion des restaurants</li>
                    <li>Gestion des menus</li>
                    <li>Gestion des commandes</li>
                    <li>Gestion des tables</li>
                    <li>Gestion des clients</li>
                    <li>Réservation de table</li>
                    <li>Commande de repas</li>
                    <li>Historique des commandes</li>
                </ul>
                <a href="fichier/cdc-clickneat.pdf" class="btn btn-outline-primary mt-2" target="_blank">📄 Voir le Cahier des Charges</a>

                <h4 class="mt-4">🛠️ Technologies Utilisées</h4>
                <ul>
                    <li><strong>Langages :</strong> laravel, php, mysql, bootstrap, javascript, html/css</li>
                    <li><strong>Base de Données :</strong> MySQL</li>
                    <li><strong>Interface :</strong> HTML / CSS / Bootstrap</li>
                    <li><strong>IDE :</strong> Visual Studio Code</li>
                </ul>

                <h4 class="mt-4">🧑‍💻 Ce que j'ai réalisé</h4>
                <ul>
                    <li>Conception base de données avec tables
                        `addresses`, `cart_items`,
                        `carts`, `categories`, `cuisines`, `failed_jobs`, `favorites`,
                        `job_batches`, `jobs`, `menu_images`, `menus`, `migrations`, `notifications`,
                        `order_items`, `orders`, `password_reset_tokens`, `payments`, `reservations`,
                        `restaurant_categories`, `restaurant_cuisines`, `restaurant_images`, `restaurant_schedules`,
                        `restaurants`, `role_user`, `roles`, `sessions`, `tables`, `users`</li>

                    <li>Système d'authentification pour les clients et les restaurateurs</li>
                    <li>Règles métiers : réservation de table, commande de repas, historique des commandes</li>
                    <li>Interface client et restaurateur</li>
                    <li>Documentation complète + diagramme Gantt</li>
                </ul>
                <h4 class="mt-4">🧑‍💻 Difficultés rencontrées</h4>
                <ul>
                    <li>Mettre en place les règles métiers</li>
                    <li>Comment gerer les erreurs de connexion</li>
                    <li>Gestion des tables</li>
                    <li>Gestion des menus</li>
                    <li>Gestion des commandes</li>
                    <li>Gestion des restaurants</li>
                    <li>Gestion des réservations</li>
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
                            <td><a href="fichier/documentation-complète-clikneat.pdf" target="_blank">Voir</a></td>
                        </tr>
                        <tr>
                            <td>Diagramme de Gantt</td>
                            <td><a href="img/gant-clickneat.PNG" target="_blank">Voir</a></td>
                        </tr>
                        <tr>
                            <td>Modèle base de données</td>
                            <td><a href="img/modèle-bdd-clickneat.PNG" target="_blank">Accéder</a></td>
                        </tr>
                        <tr>
                            <td>Guide d'utilisation restaurateurs</td>
                            <td><a href="fichier/guide-utilisateur-restaurateur-clickneat.pdf" target="_blank">Voir</a></td>
                        </tr>
                        <tr>
                            <td>Guide d'utilisation clients</td>
                            <td><a href="fichier/guide-utilisateur-client-clikneat.pdf" target="_blank">Voir</a></td>
                        </tr>
                    </tbody>
                </table>

                <h4 class="mt-4">🔗 Fonctionnalités principales</h4>
                <ul>
                    <li>✅ Authentification utilisateur</li>
                    <li>✅ Réservation de table</li>
                    <li>✅ Commande de repas</li>
                    <li>✅ Historique des commandes</li>
                    <li>✅ Choix du restaurant et menu</li>
                </ul>

                <h4 class="mt-4">📷 Aperçu de l'interface</h4>
                <img src="img/clickn-eat.PNG" class="img-fluid rounded" alt="Aperçu de l'interface">

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
                    <a href="fichier/cahier-des-charges.pdf" class="btn btn-outline-primary mt-2" target="_blank">📄 Voir Annexe</a>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>