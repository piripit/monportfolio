<?php
$current_page = 'veille';
$page_title = 'Veille Technologique';
include 'header.php';
?>

<div class="container">
    <section class="veille-section fade-in">
        <h1>Veille Technologique</h1>
        <div class="veille-intro">
            <h2>Qu'est-ce que la veille technologique ?</h2>
            <p>La veille technologique est un processus continu de surveillance et d'analyse des évolutions technologiques dans un domaine spécifique. Elle permet de rester informé des dernières innovations, tendances et bonnes pratiques, afin d'anticiper les changements et de maintenir ses compétences à jour.</p>
        </div>

        <div class="veille-grid">
            <!-- Laravel -->
            <article class="veille-card">
                <div class="veille-image">
                    <img src="img/laravel.png" alt="Laravel">
                    <span class="veille-category">Framework PHP</span>
                </div>
                <div class="veille-content">
                    <h3>Laravel</h3>
                    <p>Framework PHP moderne et élégant pour le développement web.</p>
                    <div class="veille-tools">
                        <h4>Outils de veille :</h4>
                        <ul>
                            <li><a href="https://laravel-news.com/" target="_blank">Laravel News</a> - Blog officiel</li>
                            <li><a href="https://github.com/laravel/laravel" target="_blank">GitHub Laravel</a> - Code source</li>
                            <li><a href="https://laracasts.com/" target="_blank">Laracasts</a> - Tutoriels vidéo</li>
                            <li><a href="https://packagist.org/" target="_blank">Packagist</a> - Bibliothèques</li>
                            <li><a href="https://twitter.com/laravelphp" target="_blank">Twitter Laravel</a> - Actualités</li>
                        </ul>
                    </div>
                </div>
            </article>

            <!-- Bootstrap -->
            <article class="veille-card">
                <div class="veille-image">
                    <img src="img/bootstrap.png" alt="Bootstrap">
                    <span class="veille-category">Framework CSS</span>
                </div>
                <div class="veille-content">
                    <h3>Bootstrap</h3>
                    <p>Framework CSS populaire pour le développement d'interfaces web responsives.</p>
                    <div class="veille-tools">
                        <h4>Outils de veille :</h4>
                        <ul>
                            <li><a href="https://getbootstrap.com/docs/" target="_blank">Documentation Bootstrap</a></li>
                            <li><a href="https://github.com/twbs/bootstrap" target="_blank">GitHub Bootstrap</a></li>
                            <li><a href="https://blog.getbootstrap.com/" target="_blank">Blog Bootstrap</a></li>
                            <li><a href="https://bootswatch.com/" target="_blank">Bootswatch</a> - Thèmes</li>
                            <li><a href="https://expo.getbootstrap.com/" target="_blank">Bootstrap Expo</a> - Exemples</li>
                        </ul>
                    </div>
                </div>
            </article>

            <!-- Intelligence Artificielle -->
            <article class="veille-card">
                <div class="veille-image">
                    <img src="img/AI.png" alt="Intelligence Artificielle">
                    <span class="veille-category">IA</span>
                </div>
                <div class="veille-content">
                    <h3>Intelligence Artificielle</h3>
                    <p>Technologies et applications de l'IA dans le développement web et mobile.</p>
                    <div class="veille-tools">
                        <h4>Outils de veille :</h4>
                        <ul>
                            <li><a href="https://openai.com/blog" target="_blank">OpenAI Blog</a></li>
                            <li><a href="https://www.deeplearning.ai/" target="_blank">DeepLearning.AI</a></li>
                            <li><a href="https://www.tensorflow.org/" target="_blank">TensorFlow</a></li>
                            <li><a href="https://pytorch.org/" target="_blank">PyTorch</a></li>
                            <li><a href="https://www.kaggle.com/" target="_blank">Kaggle</a> - Communauté</li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>