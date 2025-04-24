<?php
$current_page = 'tableau';
$page_title = 'Tableau de Compétences';
include 'header.php';
?>

<div id="synthese" style="margin-top: 2rem;">
    <div class="container">
        <h2 class="text-center">TABLEAU DE SYNTHÈSE</h2>
        <div class="tableau-cartes">
            <div class="carte">
                <h3>Gestion de pause</h3>
                <ul>
                    <li>Gérer le patrimoine informatique: <span class="competence"></span></li>
                    <hr>
                    <li>Répondre aux incidents et aux demandes d'assistance et d'évolution: <span class="competence"></span></li>
                    <hr>
                    <li>Développer la présence en ligne de l'organisation: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Travailler en mode projet: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Mettre à disposition des utilisateurs un service informatique: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Organiser son développement professionnel: <span class="competence"></span></li>
                </ul>
            </div>
            <div class="carte">
                <h3>Clickn'eat</h3>
                <ul>
                    <li>Gérer le patrimoine informatique: <span class="competence"></span></li>
                    <hr>
                    <li>Répondre aux incidents et aux demandes d'assistance et d'évolution: <span class="competence"></span></li>
                    <hr>
                    <li>Développer la présence en ligne de l'organisation: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Travailler en mode projet: <span class="competence"></span></li>
                    <hr>
                    <li>Mettre à disposition des utilisateurs un service informatique: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Organiser son développement professionnel: <span class="competence"></span></li>
                </ul>
            </div>
            <div class="carte">
                <h3>Welcome Training</h3>
                <ul>
                    <li>Gérer le patrimoine informatique: <span class="competence"></span></li>
                    <hr>
                    <li>Répondre aux incidents et aux demandes d'assistance et d'évolution: <span class="competence"></span></li>
                    <hr>
                    <li>Développer la présence en ligne de l'organisation: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Travailler en mode projet: <span class="competence"></span></li>
                    <hr>
                    <li>Mettre à disposition des utilisateurs un service informatique: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Organiser son développement professionnel: <span class="competence"></span></li>
                </ul>
            </div>
            <div class="carte">
                <h3>Assistance aux utilisateurs(ServiceNow)</h3>
                <ul>
                    <li>Gérer le patrimoine informatique: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Répondre aux incidents et aux demandes d'assistance et d'évolution: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Développer la présence en ligne de l'organisation: <span class="competence"></span></li>
                    <hr>
                    <li>Travailler en mode projet: <span class="competence"></span></li>
                    <hr>
                    <li>Mettre à disposition des utilisateurs un service informatique: <span class="competence">&#10006;</span></li>
                    <hr>
                    <li>Organiser son développement professionnel: <span class="competence"></span></li>
                </ul>
            </div>
        </div>
    </div>
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