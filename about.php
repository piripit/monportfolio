<?php
$current_page = 'about';
$page_title = 'À propos';
include 'header.php';
?>

<div class="container">
    <section class="about-section fade-in">
        <div class="about-header">
            <img src="img/mol-removebg (1).png" alt="Photo de profil" class="profile-img">
            <h1>À propos de moi</h1>
            <p>Développeur Web Full Stack passionné</p>
        </div>

        <div class="about-content">
            <div class="about-text">
                <h2>Mon Parcours</h2>
                <p>
                    Je suis un développeur web passionné par la création d'applications web modernes et performantes.
                    Mon parcours m'a permis d'acquérir une solide expérience dans le développement front-end et back-end.
                </p>
            </div>

            <div class="about-cards">
                <div class="about-card">
                    <i class="fas fa-code"></i>
                    <h3>Compétences Techniques</h3>
                    <ul class="skill-list">
                        <li>HTML5 & CSS3</li>
                        <li>JavaScript (ES6+)</li>
                        <li>PHP & MySQL</li>
                        <li>React & Node.js</li>
                        <li>Git & GitHub</li>
                        <li>Responsive Design</li>
                    </ul>
                </div>

                <div class="about-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Formation</h3>
                    <ul class="skill-list">
                        <li>BTS SIO - Option SLAM</li>
                        <li>Baccalauréat STI2D</li>
                        <li>Formations en ligne</li>
                    </ul>
                </div>

                <div class="about-card">
                    <i class="fas fa-tools"></i>
                    <h3>Outils</h3>
                    <ul class="skill-list">
                        <li>VS Code</li>
                        <li>Git</li>
                        <li>Figma</li>
                        <li>Postman</li>
                        <li>Docker</li>
                    </ul>
                </div>
            </div>

            <div class="about-details">
                <h2>Mes Objectifs</h2>
                <p>
                    Je souhaite continuer à développer mes compétences en développement web et participer à des projets innovants.
                    Mon objectif est de créer des applications web performantes et accessibles qui répondent aux besoins des utilisateurs.
                </p>

                <div class="interests-grid">
                    <div class="interest-item">
                        <i class="fas fa-laptop-code"></i>
                        <span>Développement Web</span>
                    </div>
                    <div class="interest-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Applications Mobiles</span>
                    </div>
                    <div class="interest-item">
                        <i class="fas fa-database"></i>
                        <span>Bases de Données</span>
                    </div>
                    <div class="interest-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Cybersécurité</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>