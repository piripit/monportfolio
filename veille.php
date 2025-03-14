<?php
$current_page = 'veille';
$page_title = 'Veille Technologique';
include 'header.php';
?>

<div class="container">
    <section class="veille-section fade-in">
        <h1>Veille Technologique</h1>
        <p class="section-intro">Restez informé des dernières tendances et innovations dans le développement web</p>

        <div class="veille-grid">
            <article class="veille-card">
                <div class="veille-image">
                    <img src="img/veille1.jpg" alt="Article 1">
                    <span class="veille-category">Frontend</span>
                </div>
                <div class="veille-content">
                    <h3>Les dernières tendances CSS en 2024</h3>
                    <p>Découvrez les nouvelles fonctionnalités CSS qui vont révolutionner le développement web en 2024.</p>
                    <div class="veille-meta">
                        <span>15 Mars 2024</span>
                        <span>CSS Tricks</span>
                    </div>
                    <a href="#" class="veille-link">
                        Lire l'article
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="veille-card">
                <div class="veille-image">
                    <img src="img/veille2.jpg" alt="Article 2">
                    <span class="veille-category">Backend</span>
                </div>
                <div class="veille-content">
                    <h3>PHP 8.3 : Les nouvelles fonctionnalités</h3>
                    <p>Un aperçu complet des nouvelles fonctionnalités et améliorations de performance dans PHP 8.3.</p>
                    <div class="veille-meta">
                        <span>10 Mars 2024</span>
                        <span>PHP.net</span>
                    </div>
                    <a href="#" class="veille-link">
                        Lire l'article
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="veille-card">
                <div class="veille-image">
                    <img src="img/veille3.jpg" alt="Article 3">
                    <span class="veille-category">Sécurité</span>
                </div>
                <div class="veille-content">
                    <h3>Les meilleures pratiques de sécurité web</h3>
                    <p>Guide complet sur les dernières tendances en matière de sécurité web et protection des données.</p>
                    <div class="veille-meta">
                        <span>5 Mars 2024</span>
                        <span>OWASP</span>
                    </div>
                    <a href="#" class="veille-link">
                        Lire l'article
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>