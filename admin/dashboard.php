<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Fonction pour sauvegarder les modifications
function saveChanges($content, $file)
{
    // Vérifier si le fichier existe et est accessible en écriture
    if (!file_exists('../' . $file)) {
        error_log("Erreur: Le fichier ../{$file} n'existe pas");
        return false;
    }

    if (!is_writable('../' . $file)) {
        error_log("Erreur: Le fichier ../{$file} n'est pas accessible en écriture");
        return false;
    }

    $backup_dir = '../backups/';
    if (!file_exists($backup_dir)) {
        if (!mkdir($backup_dir, 0777, true)) {
            error_log("Erreur: Impossible de créer le dossier de sauvegarde");
            return false;
        }
    }

    // Créer une sauvegarde avant modification
    $backup_file = $backup_dir . basename($file) . '_' . date('Y-m-d_H-i-s') . '.bak';
    if (!copy('../' . $file, $backup_file)) {
        error_log("Erreur: Impossible de créer la sauvegarde");
        return false;
    }

    // Sauvegarder les modifications
    $result = file_put_contents('../' . $file, $content);
    if ($result === false) {
        error_log("Erreur: Impossible de sauvegarder les modifications dans ../{$file}");
        return false;
    }

    error_log("Succès: Modifications sauvegardées dans ../{$file}");
    return true;
}

// Traitement des modifications
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $message = '';

    switch ($action) {
        case 'update_content':
            $file = $_POST['file'] ?? '';
            $content = $_POST['content'] ?? '';

            if ($file && $content) {
                if (saveChanges($content, $file)) {
                    $message = "Modifications sauvegardées avec succès !";
                } else {
                    $message = "Erreur lors de la sauvegarde. Vérifiez les logs pour plus de détails.";
                }
            } else {
                $message = "Erreur: Fichier ou contenu manquant";
            }
            break;

        case 'logout':
            session_destroy();
            header('Location: login.php');
            exit;
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Tableau de bord</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- TinyMCE avec clé API gratuite -->
    <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/6/tinymce.min.js"></script>
</head>

<body class="admin-dashboard">
    <nav class="admin-nav">
        <div class="nav-brand">Administration</div>
        <ul class="nav-menu">
            <li><a href="#" data-section="content">Contenu</a></li>
            <li><a href="#" data-section="projects">Projets</a></li>
            <li><a href="#" data-section="settings">Paramètres</a></li>
            <li>
                <form method="POST" style="display: inline;">
                    <input type="hidden" name="action" value="logout">
                    <button type="submit" class="logout-btn">Déconnexion</button>
                </form>
            </li>
        </ul>
    </nav>

    <div class="admin-container">
        <?php if (isset($message)): ?>
            <div class="message"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <div class="admin-section" id="content-section">
            <h2>Gestion du contenu</h2>
            <div class="content-editor">
                <select id="page-selector" onchange="loadPageContent()">
                    <option value="">Sélectionner une page</option>
                    <option value="index.php">Page d'accueil</option>
                    <option value="about.php">À propos</option>
                    <option value="projet.php">Projets</option>
                    <option value="projet_cours.php">Projets Cours</option>
                    <option value="projet_entreprise.php">Projets Entreprise</option>
                    <option value="entreprise.php">Entreprise</option>
                    <option value="ecole.php">Formation</option>
                    <option value="veille.php">Veille</option>
                </select>

                <form method="POST" id="content-form">
                    <input type="hidden" name="action" value="update_content">
                    <input type="hidden" name="file" id="current-file">
                    <textarea id="content-editor" name="content"></textarea>
                    <button type="submit" class="save-btn">Sauvegarder</button>
                </form>
            </div>
        </div>

        <div class="admin-section" id="projects-section" style="display: none;">
            <h2>Gestion des projets</h2>
            <div class="projects-manager">
                <button onclick="addNewProject()" class="add-btn">Ajouter un projet</button>
                <div id="projects-list">
                    <!-- Liste des projets chargée dynamiquement -->
                </div>
            </div>
        </div>

        <div class="admin-section" id="settings-section" style="display: none;">
            <h2>Paramètres</h2>
            <form method="POST" class="settings-form">
                <div class="form-group">
                    <label>Titre du site</label>
                    <input type="text" name="site_title" value="Mon Portfolio">
                </div>
                <div class="form-group">
                    <label>Email de contact</label>
                    <input type="email" name="contact_email" value="<?php echo htmlspecialchars($contact_email ?? ''); ?>">
                </div>
                <button type="submit" class="save-btn">Enregistrer les paramètres</button>
            </form>
        </div>
    </div>

    <button class="theme-toggle" aria-label="Basculer le mode sombre">
        <i class="fas fa-moon"></i>
    </button>

    <script src="../script/theme.js"></script>
    <script>
        // Initialisation de TinyMCE avec configuration améliorée
        tinymce.init({
            selector: '#content-editor',
            height: 500,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family: Inter, sans-serif; font-size: 14px }',
            branding: false,
            promotion: false
        });

        // Gestion de la navigation
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const section = this.dataset.section;
                showSection(section);
            });
        });

        function showSection(sectionId) {
            document.querySelectorAll('.admin-section').forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(sectionId + '-section').style.display = 'block';
        }

        // Chargement du contenu des pages
        async function loadPageContent() {
            const pageFile = document.getElementById('page-selector').value;
            if (!pageFile) return;

            try {
                const response = await fetch(`load_content.php?file=${pageFile}`);
                const content = await response.text();
                tinymce.get('content-editor').setContent(content);
                document.getElementById('current-file').value = pageFile;
            } catch (error) {
                console.error('Erreur lors du chargement du contenu:', error);
            }
        }

        // Gestion des projets
        function addNewProject() {
            // Implémenter l'ajout de projet
            alert('Fonctionnalité en cours de développement');
        }
    </script>
</body>

</html>