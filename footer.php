    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact</h3>
                <p><i class="fas fa-envelope"></i> email@example.com</p>
                <p><i class="fas fa-phone"></i> +33 6 12 34 56 78</p>
            </div>
            <div class="footer-section">
                <h3>Réseaux Sociaux</h3>
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Mon Portfolio. Tous droits réservés.</p>
        </div>
    </footer>
    <button class="theme-toggle" id="theme-toggle">
        <i class="fas fa-moon"></i>
    </button>
    <script src="script/theme.js"></script>
    <script src="script/menu.js"></script>
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