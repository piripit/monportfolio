<?php
$current_page = 'about';
$page_title = 'À propos';
include 'header.php';
?>

<div class="container">
    <!-- Section principale de présentation -->
    <section class="about-intro-section fade-in">
        <div class="about-intro-container">
            <div class="about-intro-text">
                <h1>À propos de moi</h1>
                <div class="subtitle-bar"></div>
                <p class="about-subtitle">Étudiant en BTS SIO option SLAM</p>
                <p class="about-description">
                    Je suis actuellement en formation BTS Services Informatiques aux Organisations (SIO)
                    option Solutions Logicielles et Applications Métiers (SLAM). En parallèle, je suis
                    en alternance chez Econocom où j'occupe le poste de Technicien Niveau 1 et Développeur.
                </p>
            </div>
            <div class="about-image-wrapper">
                <div class="about-image">
                    <img src="img/Moi.jpg" alt="Photo de profil" onerror="this.src='img/avatar-default.png'">
                </div>
            </div>
        </div>
    </section>

    <!-- Section parcours et objectifs -->
    <section class="about-details-section">
        <div class="about-grid">
            <!-- Parcours -->
            <div class="about-box fade-in">
                <div class="about-box-header">
                    <div class="about-box-icon">
                        <i class="fas fa-road"></i>
                    </div>
                    <h2>Mon Parcours</h2>
                </div>
                <div class="about-box-content">
                    <p>
                        En tant qu'étudiant en BTS SIO option SLAM, je développe mes compétences en
                        programmation et en développement d'applications. Cette formation me permet
                        d'acquérir une solide base théorique tout en mettant en pratique mes connaissances
                        dans un environnement professionnel.
                    </p>
                    <p>
                        Mon parcours combine une formation académique rigoureuse et une expérience
                        professionnelle enrichissante. J'ai l'opportunité d'appliquer mes connaissances
                        théoriques dans des situations réelles, ce qui renforce ma compréhension des concepts
                        et améliore mes compétences pratiques.
                    </p>
                </div>
            </div>

            <!-- Objectifs -->
            <div class="about-box fade-in">
                <div class="about-box-header">
                    <div class="about-box-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2>Mes Objectifs</h2>
                </div>
                <div class="about-box-content">
                    <p>
                        Mon objectif principal est de devenir un développeur compétent et polyvalent.
                        Je souhaite continuer à développer mes compétences en programmation et en
                        développement d'applications, tout en acquérant de l'expérience professionnelle
                        dans le domaine de l'informatique.
                    </p>
                    <p>
                        À long terme, j'aspire à participer à des projets innovants qui ont un impact
                        positif sur la société. Je suis particulièrement intéressé par les technologies web
                        et les applications mobiles, car elles offrent de nombreuses possibilités pour créer
                        des solutions utiles et accessibles.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section compétences -->
    <section class="skills-section fade-in">
        <div class="section-title">
            <h2>Savoir faire & Expérience</h2>
            <div class="title-bar"></div>
        </div>

        <div class="skills-grid">
            <!-- Compétences techniques -->
            <div class="skills-box">
                <div class="skills-box-header">
                    <div class="skills-box-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Compétences Techniques</h3>
                </div>
                <ul class="skills-list">
                    <li><span class="skill-check"><i class="fas fa-check"></i></span>HTML, CSS, JavaScript</li>
                    <li><span class="skill-check"><i class="fas fa-check"></i></span>PHP, MySQL</li>
                    <li><span class="skill-check"><i class="fas fa-check"></i></span>Java, Python</li>
                    <li><span class="skill-check"><i class="fas fa-check"></i></span>Git, GitHub</li>
                    <li><span class="skill-check"><i class="fas fa-check"></i></span>Responsive Design</li>
                </ul>
            </div>

            <!-- Expérience -->
            <div class="skills-box">
                <div class="skills-box-header">
                    <div class="skills-box-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Expérience</h3>
                </div>
                <ul class="skills-list">
                    <li><span class="skill-check"><i class="fas fa-check"></i></span>Technicien Niveau 1</li>
                    <li><span class="skill-check"><i class="fas fa-check"></i></span>Développeur Web</li>
                    <li><span class="skill-check"><i class="fas fa-check"></i></span>Support Utilisateur</li>
                    <li><span class="skill-check"><i class="fas fa-check"></i></span>Gestion de Projets</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section centres d'intérêt -->
    <section class="interests-section fade-in">
        <div class="section-title">
            <h2>Centres d'Intérêt</h2>
            <div class="title-bar"></div>
        </div>

        <div class="interests-grid">
            <div class="interest-card">
                <div class="interest-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Développement Web</h3>
                <p>Création de sites et applications web modernes et responsives.</p>
            </div>

            <div class="interest-card">
                <div class="interest-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Développement Mobile</h3>
                <p>Conception d'applications mobiles natives et cross-platform.</p>
            </div>

            <div class="interest-card">
                <div class="interest-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h3>Bases de Données</h3>
                <p>Conception et optimisation de bases de données relationnelles.</p>
            </div>

            <div class="interest-card">
                <div class="interest-icon">
                    <i class="fas fa-server"></i>
                </div>
                <h3>Administration Système</h3>
                <p>Gestion et maintenance de serveurs et infrastructures.</p>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>