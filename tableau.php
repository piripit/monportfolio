<?php
$current_page = 'tableau';
$page_title = 'Tableau de Compétences';
include 'header.php';
?>

<div class="container">
    <section class="tableau-section fade-in">
        <h1>Tableau de Compétences</h1>
        <p class="section-intro">Un aperçu complet de mes compétences et de leur niveau d'acquisition</p>

        <div class="tableau-grid">
            <div class="tableau-card">
                <div class="tableau-header">
                    <i class="fas fa-code"></i>
                    <h2>Frontend</h2>
                </div>
                <div class="tableau-content">
                    <div class="competence-item">
                        <div class="competence-info">
                            <span class="competence-name">HTML5</span>
                            <span class="competence-level">Avancé</span>
                        </div>
                        <div class="competence-bar">
                            <div class="competence-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="competence-item">
                        <div class="competence-info">
                            <span class="competence-name">CSS3</span>
                            <span class="competence-level">Avancé</span>
                        </div>
                        <div class="competence-bar">
                            <div class="competence-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="competence-item">
                        <div class="competence-info">
                            <span class="competence-name">JavaScript</span>
                            <span class="competence-level">Intermédiaire</span>
                        </div>
                        <div class="competence-bar">
                            <div class="competence-progress" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tableau-card">
                <div class="tableau-header">
                    <i class="fas fa-server"></i>
                    <h2>Backend</h2>
                </div>
                <div class="tableau-content">
                    <div class="competence-item">
                        <div class="competence-info">
                            <span class="competence-name">PHP</span>
                            <span class="competence-level">Avancé</span>
                        </div>
                        <div class="competence-bar">
                            <div class="competence-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="competence-item">
                        <div class="competence-info">
                            <span class="competence-name">MySQL</span>
                            <span class="competence-level">Intermédiaire</span>
                        </div>
                        <div class="competence-bar">
                            <div class="competence-progress" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="competence-item">
                        <div class="competence-info">
                            <span class="competence-name">Node.js</span>
                            <span class="competence-level">Débutant</span>
                        </div>
                        <div class="competence-bar">
                            <div class="competence-progress" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tableau-card">
                <div class="tableau-header">
                    <i class="fas fa-tools"></i>
                    <h2>Outils</h2>
                </div>
                <div class="tableau-content">
                    <div class="competence-item">
                        <div class="competence-info">
                            <span class="competence-name">Git</span>
                            <span class="competence-level">Intermédiaire</span>
                        </div>
                        <div class="competence-bar">
                            <div class="competence-progress" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="competence-item">
                        <div class="competence-info">
                            <span class="competence-name">Docker</span>
                            <span class="competence-level">Débutant</span>
                        </div>
                        <div class="competence-bar">
                            <div class="competence-progress" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="competence-item">
                        <div class="competence-info">
                            <span class="competence-name">VS Code</span>
                            <span class="competence-level">Avancé</span>
                        </div>
                        <div class="competence-bar">
                            <div class="competence-progress" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>

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