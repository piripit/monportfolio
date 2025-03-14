<?php
$current_page = 'about';
$page_title = 'À propos';
include 'header.php';
?>

<div class="container">
    <section class="about-section">
        <div class="about-hero">
            <div class="about-hero-content">
                <div class="about-hero-text">
                    <h1>À propos de moi</h1>
                    <p class="hero-subtitle">Étudiant en BTS SIO option SLAM</p>
                    <p class="hero-description">
                        Je suis actuellement en formation BTS Services Informatiques aux Organisations (SIO)
                        option Solutions Logicielles et Applications Métiers (SLAM). En parallèle, je suis
                        en alternance chez Econocom où j'occupe le poste de Technicien Niveau 1 et Développeur.
                    </p>
                </div>
                <div class="about-hero-image">
                    <div class="profile-container">
                        <img src="img/Moi.jpg" alt="Photo de profil" class="profile-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="about-grid">
            <div class="about-main">
                <div class="about-text">
                    <h2>Mon Parcours</h2>
                    <p>
                        En tant qu'étudiant en BTS SIO option SLAM, je développe mes compétences en
                        programmation et en développement d'applications. Cette formation me permet
                        d'acquérir une solide base théorique tout en mettant en pratique mes connaissances
                        dans un environnement professionnel.
                    </p>
                </div>

                <div class="about-objectives">
                    <h2>Mes Objectifs</h2>
                    <p>
                        Mon objectif principal est de devenir un développeur compétent et polyvalent.
                        Je souhaite continuer à développer mes compétences en programmation et en
                        développement d'applications, tout en acquérant de l'expérience professionnelle
                        dans le domaine de l'informatique.
                    </p>
                </div>
            </div>

            <div class="about-sidebar">
                <div class="about-card">
                    <div class="card-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Formation</h3>
                    <ul class="skill-list">
                        <li><i class="fas fa-check"></i> BTS SIO option SLAM</li>
                        <li><i class="fas fa-check"></i> Formation en alternance</li>
                        <li><i class="fas fa-check"></i> Développement continu</li>
                    </ul>
                </div>

                <div class="about-card">
                    <div class="card-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Expérience</h3>
                    <ul class="skill-list">
                        <li><i class="fas fa-check"></i> Technicien Niveau 1</li>
                        <li><i class="fas fa-check"></i> Développeur</li>
                        <li><i class="fas fa-check"></i> Alternance chez Econocom</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="interests-section">
            <h2>Mes Centres d'Intérêt</h2>
            <div class="interests-grid">
                <div class="interest-item">
                    <div class="interest-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Programmation</h3>
                    <p>Passionné par le développement d'applications et la création de solutions informatiques innovantes.</p>
                </div>

                <div class="interest-item">
                    <div class="interest-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Développement Web</h3>
                    <p>Intéressé par la création de sites web et d'applications web modernes et responsives.</p>
                </div>

                <div class="interest-item">
                    <div class="interest-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Bases de Données</h3>
                    <p>Curieux d'apprendre et de comprendre la gestion et l'optimisation des bases de données.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>