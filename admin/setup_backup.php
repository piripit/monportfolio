<?php
// Chemin vers le dossier de sauvegarde
$backup_dir = '../backups';

// Création du dossier s'il n'existe pas
if (!file_exists($backup_dir)) {
    mkdir($backup_dir, 0755, true);
    echo "✓ Dossier backups créé avec succès\n";
}

// Création du fichier .htaccess pour protéger le dossier
$htaccess_content = "Order deny,allow\nDeny from all";
file_put_contents($backup_dir . '/.htaccess', $htaccess_content);
echo "✓ Protection .htaccess ajoutée\n";

// Création du fichier index.php vide pour plus de sécurité
file_put_contents($backup_dir . '/index.php', '<?php header("HTTP/1.0 403 Forbidden"); exit;');
echo "✓ Protection index.php ajoutée\n";

// Création du fichier de log
$log_file = $backup_dir . '/admin_log.txt';
if (!file_exists($log_file)) {
    file_put_contents($log_file, "=== Journal d'administration ===\n");
    echo "✓ Fichier de log créé\n";
}

// Test d'écriture
$test_file = $backup_dir . '/test.txt';
if (file_put_contents($test_file, 'Test')) {
    unlink($test_file);
    echo "✓ Test d'écriture réussi\n";
} else {
    echo "⚠ Erreur : Impossible d'écrire dans le dossier backups\n";
}

// Création de la structure des sous-dossiers
$subdirs = ['pages', 'projects', 'media'];
foreach ($subdirs as $dir) {
    $path = $backup_dir . '/' . $dir;
    if (!file_exists($path)) {
        mkdir($path, 0755, true);
        echo "✓ Sous-dossier $dir créé\n";
    }
}

echo "\nConfiguration terminée !\n";
echo "Le système de sauvegarde est prêt à être utilisé.\n";
