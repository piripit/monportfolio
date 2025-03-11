<?php
session_start();
require_once 'config.php';

if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}

class BackupManager
{
    private $backup_dir;
    private $max_backups;

    public function __construct($backup_dir, $max_backups = 10)
    {
        $this->backup_dir = $backup_dir;
        $this->max_backups = $max_backups;
    }

    // Créer une sauvegarde
    public function createBackup($file_path, $type = 'pages')
    {
        if (!file_exists($file_path)) {
            return false;
        }

        $filename = basename($file_path);
        $backup_path = $this->backup_dir . '/' . $type . '/' . $filename . '_' . date('Y-m-d_H-i-s') . '.bak';

        if (copy($file_path, $backup_path)) {
            $this->cleanOldBackups($filename, $type);
            logAction('backup_created', "Sauvegarde créée : $backup_path");
            return true;
        }
        return false;
    }

    // Restaurer une sauvegarde
    public function restoreBackup($backup_file, $type = 'pages')
    {
        $backup_path = $this->backup_dir . '/' . $type . '/' . $backup_file;
        if (!file_exists($backup_path)) {
            return false;
        }

        $original_file = '../' . explode('_', $backup_file)[0];
        if (copy($backup_path, $original_file)) {
            logAction('backup_restored', "Restauration : $backup_file");
            return true;
        }
        return false;
    }

    // Lister les sauvegardes
    public function listBackups($type = 'pages')
    {
        $backups = [];
        $pattern = $this->backup_dir . '/' . $type . '/*.bak';
        foreach (glob($pattern) as $file) {
            $backups[] = [
                'file' => basename($file),
                'date' => date('Y-m-d H:i:s', filemtime($file)),
                'size' => $this->formatSize(filesize($file))
            ];
        }
        return $backups;
    }

    // Nettoyer les anciennes sauvegardes
    private function cleanOldBackups($filename, $type = 'pages')
    {
        $pattern = $this->backup_dir . '/' . $type . '/' . $filename . '_*.bak';
        $backups = glob($pattern);

        if (count($backups) > $this->max_backups) {
            usort($backups, function ($a, $b) {
                return filemtime($a) - filemtime($b);
            });

            $to_delete = array_slice($backups, 0, count($backups) - $this->max_backups);
            foreach ($to_delete as $file) {
                unlink($file);
                logAction('backup_deleted', "Suppression ancienne sauvegarde : $file");
            }
        }
    }

    // Formater la taille des fichiers
    private function formatSize($size)
    {
        $units = ['B', 'KB', 'MB', 'GB'];
        $power = floor(log($size, 1024));
        return round($size / pow(1024, $power), 2) . ' ' . $units[$power];
    }
}

// Interface de gestion des sauvegardes
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $manager = new BackupManager(BACKUP_DIR, MAX_BACKUPS);
    $message = '';

    switch ($action) {
        case 'create':
            $file = $_POST['file'] ?? '';
            $type = $_POST['type'] ?? 'pages';
            if ($manager->createBackup('../' . $file, $type)) {
                $message = "Sauvegarde créée avec succès";
            } else {
                $message = "Erreur lors de la création de la sauvegarde";
            }
            break;

        case 'restore':
            $backup = $_POST['backup'] ?? '';
            $type = $_POST['type'] ?? 'pages';
            if ($manager->restoreBackup($backup, $type)) {
                $message = "Restauration effectuée avec succès";
            } else {
                $message = "Erreur lors de la restauration";
            }
            break;
    }
}

// Affichage de l'interface
$manager = new BackupManager(BACKUP_DIR, MAX_BACKUPS);
$backups = $manager->listBackups();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire de sauvegardes</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body class="admin-dashboard">
    <div class="admin-container">
        <h1>Gestionnaire de sauvegardes</h1>

        <?php if (isset($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <div class="backup-section">
            <h2>Créer une sauvegarde</h2>
            <form method="POST" class="backup-form">
                <input type="hidden" name="action" value="create">
                <div class="form-group">
                    <label>Fichier à sauvegarder</label>
                    <select name="file" required>
                        <option value="">Sélectionner un fichier</option>
                        <option value="index.php">Page d'accueil</option>
                        <option value="about.php">À propos</option>
                        <option value="projet.php">Projets</option>
                    </select>
                </div>
                <button type="submit" class="btn-primary">Créer une sauvegarde</button>
            </form>
        </div>

        <div class="backup-section">
            <h2>Sauvegardes disponibles</h2>
            <div class="backup-list">
                <?php if (empty($backups)): ?>
                    <p>Aucune sauvegarde disponible</p>
                <?php else: ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Fichier</th>
                                <th>Date</th>
                                <th>Taille</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($backups as $backup): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($backup['file']); ?></td>
                                    <td><?php echo $backup['date']; ?></td>
                                    <td><?php echo $backup['size']; ?></td>
                                    <td>
                                        <form method="POST" style="display: inline;">
                                            <input type="hidden" name="action" value="restore">
                                            <input type="hidden" name="backup" value="<?php echo htmlspecialchars($backup['file']); ?>">
                                            <button type="submit" class="btn-secondary">Restaurer</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>