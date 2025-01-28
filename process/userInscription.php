<?php
require_once("../utils/autoloader.php");


// Fonction de sanitisation
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Fonction de redirection avec conservation des valeurs des champs
function redirect_with_error($error) {
    $query = http_build_query(array_merge($_POST, ['error' => $error]));
    header("Location: ../../FRONT-END/PHP/register.php?$query");
    exit;
}

// Vérifie que le server soit en POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect_with_error("La méthode de requête n'est pas POST.");
}

// Regarde que tous les inputs existent
if (
    !isset(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['pseudo'],
        $_POST['email'],
        $_POST['telephone'],
        $_POST['password'],
        $_POST['confirm-password'],
        $_POST['role'],
        $_POST['adresse'],
        $_POST['code-postal'],
        $_POST['pays']
    )
) {
    redirect_with_error("Tous les champs requis ne sont pas présents.");
}

// Vérifie que les inputs ne soient pas vides et ne dépassent pas 30 caractères
foreach ($_POST as $key => $value) {
    if (empty($value) || strlen($value) > 30) {
        redirect_with_error("Le champ $key est vide ou dépasse 30 caractères.");
    }
    $_POST[$key] = sanitize_input($value);
}

// Vérifie la conformité de l'email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    redirect_with_error("L'email n'est pas valide.");
}

// Vérifie si l'email existe déjà dans la base de données
try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $emailCheckStmt = $conn->prepare("SELECT COUNT(*) FROM user WHERE mail = ?");
    $emailCheckStmt->execute([$_POST['email']]);
    $emailCount = $emailCheckStmt->fetchColumn();

    if ($emailCount > 0) {
        redirect_with_error("Cette adresse e-mail est déjà utilisée.");
    }
} catch (PDOException $e) {
    redirect_with_error("Erreur: " . $e->getMessage());
}

// Vérifie la correspondance des mots de passe
if ($_POST['password'] !== $_POST['confirm-password']) {
    redirect_with_error("Les mots de passe ne correspondent pas.");
}

// Vérifie et traite l'upload de l'image de profil si présente
$imageUrl = '../../FRONT-END/Images/Profil/Icone profil.png'; //
$uploadDir = '../../FRONT-END/uploads/';
if (isset($_FILES['profile-image']) && $_FILES['profile-image']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['profile-image']['tmp_name'];
    $fileName = $_FILES['profile-image']['name'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedfileExtensions = array('jpg', 'jpeg', 'png');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        // Génère un nom de fichier unique
        $newFileName = uniqid('profile_', true) . '.' . $fileExtension;
        $destinationPath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $destinationPath)) {
            $imageUrl = 'uploads/' . $newFileName; // URL relative pour la base de données
        } else {
            redirect_with_error("Erreur lors de l'upload de l'image.");
        }
    } else {
        redirect_with_error("Extension de fichier non autorisée.");
    }
}

// Vérifie les champs supplémentaires pour les vendeurs
$entreprise = null;
$telephone_vendeur = null;
$adresse_vendeur = null;
$code_postal_vendeur = null;
$pays_vendeur = null;

if ($_POST['role'] === 'vendeur' || $_POST['role'] === 'les-deux') {
    if (
        !isset(
            $_POST['entreprise']
        ) || strlen($_POST['entreprise']) > 30
    ) {
        redirect_with_error("Le champ entreprise est vide ou dépasse 30 caractères.");
    }
    $entreprise = sanitize_input($_POST['entreprise']);

    // Vérifie si les champs d'adresse et de téléphone sont les mêmes que ceux de l'acheteur
    $telephone_vendeur = isset($_POST['telephone-vendeur']) ? sanitize_input($_POST['telephone-vendeur']) : $_POST['telephone'];
    $adresse_vendeur = isset($_POST['adresse-vendeur']) ? sanitize_input($_POST['adresse-vendeur']) : $_POST['adresse'];
    $code_postal_vendeur = isset($_POST['code-postal-vendeur']) ? sanitize_input($_POST['code-postal-vendeur']) : $_POST['code-postal'];
    $pays_vendeur = isset($_POST['pays-vendeur']) ? sanitize_input($_POST['pays-vendeur']) : $_POST['pays'];
}

try {
    // Connexion à la base de données
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifie que les champs d'adresse ne soient pas vides
    if (empty($_POST['adresse']) || empty($_POST['code-postal']) || empty($_POST['pays'])) {
        redirect_with_error("Les champs d'adresse ne peuvent pas être vides.");
    }

    // Insertion de l'adresse
    $adresseStmt = $conn->prepare("INSERT INTO adresses (name_adress, postal_code, country) VALUES (?, ?, ?)");
    $adresseStmt->execute([$_POST['adresse'], $_POST['code-postal'], $_POST['pays']]);
    $id_adresses = $conn->lastInsertId();

    // Insertion de l'adresse de l'entreprise si différente
    if ($_POST['role'] === 'vendeur' || $_POST['role'] === 'les-deux') {
        if ($adresse_vendeur !== $_POST['adresse'] || $code_postal_vendeur !== $_POST['code-postal'] || $pays_vendeur !== $_POST['pays']) {
            $adresseEntrepriseStmt = $conn->prepare("INSERT INTO adresses (name_adress, postal_code, country) VALUES (?, ?, ?)");
            $adresseEntrepriseStmt->execute([$adresse_vendeur, $code_postal_vendeur, $pays_vendeur]);
            $id_adress_company = $conn->lastInsertId();
        } else {
            $id_adress_company = $id_adresses;
        }
    } else {
        $id_adress_company = null;
    }

    // Préparation de la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO user (image, last_name, first_name, pseudo, mail, password, phone_number, id_role, isPro, name_compagny, phone_company, id_adresses, id_adress_company) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $imageUrl,
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['pseudo'],
        $_POST['email'],
        password_hash($_POST['password'], PASSWORD_DEFAULT),
        $_POST['telephone'],
        $_POST['role'] === 'acheteur' ? 1 : ($_POST['role'] === 'vendeur' ? 2 : 3),
        $_POST['role'] === 'acheteur' ? 0 : 1,
        $entreprise,
        $telephone_vendeur,
        $id_adresses,
        $id_adress_company
    ]);

    // Démarre une session et enregistre les informations de l'utilisateur
    session_start();
    $_SESSION['user'] = [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'pseudo' => $_POST['pseudo'],
        'email' => $_POST['email'],
        'role' => $_POST['role']
    ];

    header('Location: /Fil%20Rouge/FRONT-END/HTML/index.html');
    exit;
} catch (PDOException $e) {
    redirect_with_error("Erreur: " . $e->getMessage());
}

// Fermeture de la connexion
$conn = null;
?>
