<?php
session_start();
include_once("../dataBase/config.php");

// Fonction de sanitisation
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Vérifie que le serveur soit en POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../FRONT-END/PHP/login.php?error=La méthode de requête n'est pas POST.");
    exit;
}

// Récupère et sanitise les données du formulaire
$email = sanitize_input($_POST['email']);
$password = sanitize_input($_POST['password']);

// Vérifie que les champs ne sont pas vides
if (empty($email) || empty($password)) {
    header("Location: ../../FRONT-END/PHP/login.php?error=Veuillez remplir tous les champs.");
    exit;
}

// Prépare et exécute la requête SQL pour vérifier les informations d'identification
$sql = "SELECT id, pseudo, email, password FROM user WHERE email = ?";
$stmt = $pdo->prepare($sql);

var_dump($sql);
var_dump($email);


$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // Vérifie le mot de passe
    if (password_verify($password, $user['password'])) {
        // Démarre une session et stocke les informations de l'utilisateur
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['email'] = $user['email'];
        header("Location: ../../FRONT-END/HTML/index.html");
        exit;
    } else {
        header("Location: ../../FRONT-END/PHP/login.php?error=Mot de passe incorrect.");
        exit;
    }
} else {
    header("Location: ../../FRONT-END/PHP/login.php?error=Email non trouvé.");
    exit;
}
?>