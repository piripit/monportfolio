<?php
// Configuration de la base de données (si nécessaire)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');  // Utilisateur par défaut de MAMP
define('DB_PASS', 'root');  // Mot de passe par défaut de MAMP
define('DB_NAME', 'portfolio');

// Configuration de l'administration
define('ADMIN_USERNAME', 'admin');
// Générer un mot de passe sécurisé - changez 'admin123' par votre mot de passe souhaité
define('ADMIN_PASSWORD_HASH', password_hash('admin123', PASSWORD_DEFAULT));

// Configuration du site
define('SITE_TITLE', 'Mon Portfolio');
define('CONTACT_EMAIL', 'votre.email@example.com');

// Configuration des sauvegardes
define('BACKUP_DIR', '../backups/');
define('MAX_BACKUPS', 10); // Nombre maximum de sauvegardes à conserver

// Configuration de sécurité
define('SESSION_LIFETIME', 3600); // Durée de vie de la session en secondes (1 heure)
define('ALLOWED_FILES', serialize([
    'index.php',
    'about.php',
    'projet.php',
    'entreprise.php',
    'ecole.php'
]));

// Fonction pour nettoyer les anciennes sauvegardes
function cleanOldBackups()
{
    $backups = glob(BACKUP_DIR . '*.bak');
    if (count($backups) > MAX_BACKUPS) {
        usort($backups, function ($a, $b) {
            return filemtime($a) - filemtime($b);
        });
        $to_delete = array_slice($backups, 0, count($backups) - MAX_BACKUPS);
        foreach ($to_delete as $file) {
            unlink($file);
        }
    }
}

// Fonction pour vérifier si une mise à jour est nécessaire
function checkForUpdates()
{
    $updates = [];
    foreach (unserialize(ALLOWED_FILES) as $file) {
        $backup = BACKUP_DIR . basename($file) . '_latest.bak';
        if (file_exists($backup) && file_exists('../' . $file)) {
            if (md5_file($backup) !== md5_file('../' . $file)) {
                $updates[] = $file;
            }
        }
    }
    return $updates;
}

// Configuration de l'éditeur TinyMCE
define('TINYMCE_CONFIG', json_encode([
    'height' => 500,
    'plugins' => [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
    ],
    'toolbar' => 'undo redo | formatselect | bold italic backcolor | \
                 alignleft aligncenter alignright alignjustify | \
                 bullist numlist outdent indent | removeformat | help'
]));

// Initialisation de la session
session_start();
ini_set('session.gc_maxlifetime', SESSION_LIFETIME);
session_set_cookie_params(SESSION_LIFETIME);

// Fonction pour vérifier si l'utilisateur est connecté
function isLoggedIn()
{
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

// Fonction pour la journalisation des actions
function logAction($action, $details = '')
{
    $log_file = BACKUP_DIR . 'admin_log.txt';
    $timestamp = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $user = $_SESSION['admin_username'] ?? 'unknown';

    $log_entry = sprintf(
        "[%s] %s - %s - %s - %s\n",
        $timestamp,
        $ip,
        $user,
        $action,
        $details
    );

    file_put_contents($log_file, $log_entry, FILE_APPEND);
}
