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
    $backup_dir = '../backups/';
    if (!file_exists($backup_dir)) {
        mkdir($backup_dir, 0777, true);
    }

    // Créer une sauvegarde avant modification
    $backup_file = $backup_dir . basename($file) . '_' . date('Y-m-d_H-i-s') . '.bak';
    copy($file, $backup_file);

    // Sauvegarder les modifications
    return file_put_contents($file, $content);
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
                    $message = "Erreur lors de la sauvegarde.";
                }
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
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <div class="admin-section" id="content-section">
            <h2>Gestion du contenu</h2>
            <div class="content-editor">
                <select id="page-selector" onchange="loadPageContent()">
                    <option value="">Sélectionner une page</option>
                    <option value="index.php">Page d'accueil</option>
                    <option value="about.php">À propos</option>
                    <option value="projet.php">Projets</option>
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

    <script>
        // Initialisation de TinyMCE
        tinymce.init({
            selector: '#content-editor',
            height: 500,
            plugins: 'code table lists link image',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code'
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
        }
    </script>
</body>

</html>