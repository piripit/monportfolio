<?php
header('Content-Type: application/json');

// Validation des données
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if (!$name || !$email || !$subject || !$message) {
    http_response_code(400);
    echo json_encode(['error' => 'Tous les champs sont requis']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Email invalide']);
    exit;
}

// Configuration de l'email
$to = "votre.email@example.com"; // Remplacez par votre email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$emailBody = "
<html>
<head>
    <title>Nouveau message de contact</title>
</head>
<body>
    <h2>Nouveau message de contact depuis votre portfolio</h2>
    <p><strong>Nom:</strong> " . htmlspecialchars($name) . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
    <p><strong>Sujet:</strong> " . htmlspecialchars($subject) . "</p>
    <p><strong>Message:</strong></p>
    <p>" . nl2br(htmlspecialchars($message)) . "</p>
</body>
</html>
";

// Envoi de l'email
$mailSent = mail($to, "Contact Portfolio: " . $subject, $emailBody, $headers);

if ($mailSent) {
    echo json_encode(['success' => 'Message envoyé avec succès']);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Erreur lors de l\'envoi du message']);
}
