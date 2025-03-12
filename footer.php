    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact</h3>
                <p><i class="fas fa-envelope"></i> fiatuwo.moriel@gmail.com</p>
                <p><i class="fas fa-phone"></i> +33 6 12 34 56 78</p>
            </div>
            <div class="footer-section">
                <h3>Réseaux Sociaux</h3>
                <div class="social-links">
                    <a href="https://linkedin.com/in/votre-profil" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/votre-profil" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://twitter.com/votre-profil" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Documents</h3>
                <div class="document-links">
                    <a href="cv.pdf" class="document-link" target="_blank">
                        <i class="fas fa-download"></i> Télécharger mon CV
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> FIATUWO Moriel. Tous droits réservés.</p>
        </div>
    </footer>
    <button class="theme-toggle" aria-label="Basculer le mode sombre">
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

            document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
        });
    </script>
    </body>

    </html>