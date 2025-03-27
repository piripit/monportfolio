    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>À propos</h3>
                <p>Étudiant en BTS SIO spécialité SLAM, je développe des compétences en développement web et applications.</p>
            </div>
            <div class="footer-section">
                <h3>Navigation</h3>
                <p><a href="index.php">Accueil</a></p>
                <p><a href="about.php">À propos</a></p>
                <p><a href="ecole.php">Formation</a></p>
                <p><a href="entreprise.php">Entreprise</a></p>
                <p><a href="projet.php">Projets</a></p>
                <p><a href="veille.php">Veille</a></p>
                <p><a href="tableau.php">Tableau</a></p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: contact@monportfolio.fr</p>
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> Mon Portfolio - Tous droits réservés</p>
        </div>
    </footer>
    <button class="theme-toggle" id="theme-toggle">
        <i class="fas fa-moon"></i>
    </button>
    <script src="script/theme.js"></script>
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

            document.querySelectorAll('.fade-in, .slide-in').forEach((el) => observer.observe(el));
        });
    </script>
    </body>

    </html>