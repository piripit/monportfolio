    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about.php">À propos</a></li>
                        <li><a href="formation.php">Formation</a></li>
                        <li><a href="entreprise.php">Entreprise</a></li>
                        <li><a href="projet.php">Projets</a></li>
                        <li><a href="veille.php">Veille</a></li>
                        <li><a href="tableau.php">Tableau</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Email: yaovifia19@gmail.com</p>
                    <div class="social-links">
                        <a href="https://github.com/dashboard" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="http://linkedin.com/in/y-moriel-fiatuwo-51544a225" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="fichier/Cv Fiatuwo.pdf" target="_blank" title="Télécharger mon CV"><i class="fas fa-file-pdf"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Mentions Légales</h3>
                    <p>© <?php echo date('Y'); ?> - Tous droits réservés</p>
                    <p><a href="mentions-legales.php">Mentions légales complètes</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Portfolio - Moriel FIATUWO</p>
            </div>
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