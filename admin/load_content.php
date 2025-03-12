<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    http_response_code(403);
    echo "Accès non autorisé";
    exit;
}

// Liste des fichiers autorisés
$allowed_files = [
    'index.php',
    'about.php',
    'projet.php',
    'projet_cours.php',
    'projet_entreprise.php',
    'entreprise.php',
    'ecole.php',
    'veille.php',
    'tableau.php'
];

$file = $_GET['file'] ?? '';

// Vérifier si le fichier est autorisé
if (!in_array($file, $allowed_files)) {
    http_response_code(400);
    echo "Fichier non autorisé";
    exit;
}

// Chemin sécurisé vers le fichier
$file_path = realpath('../' . $file);
$root_path = realpath('../');

// Vérifier que le fichier est bien dans le répertoire racine
if ($file_path === false || strpos($file_path, $root_path) !== 0) {
    http_response_code(400);
    echo "Chemin de fichier invalide";
    exit;
}

// Lire le contenu du fichier
if (file_exists($file_path)) {
    echo file_get_contents($file_path);
} else {
    http_response_code(404);
    echo "Fichier non trouvé";
}
