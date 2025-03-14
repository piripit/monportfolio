<?php
$current_page = 'tableau';
$page_title = 'Tableau de Compétences';
include 'header.php';
?>

<div class="container">
    <section class="skills-section fade-in">
        <h1>Tableau de Compétences</h1>
        <p class="section-intro">Un aperçu complet de mes compétences en développement web</p>

        <div class="skills-grid">
            <div class="skill-category">
                <h2>Frontend</h2>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>HTML5</span>
                        <span>90%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 90%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>CSS3</span>
                        <span>85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 85%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>JavaScript</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 80%"></div>
                    </div>
                </div>
            </div>

            <div class="skill-category">
                <h2>Backend</h2>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>PHP</span>
                        <span>85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 85%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>MySQL</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Node.js</span>
                        <span>75%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="skill-category">
                <h2>Outils & Frameworks</h2>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>React</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Laravel</span>
                        <span>75%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Git</span>
                        <span>85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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