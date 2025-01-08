<?php
// config.php

$host = 'localhost';
$db = 'bookmarket';
$user = 'root';
$pass = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo "<p style='color: red;'>Erreur de connexion : " . $error->getMessage() . "</p>";
}
?>