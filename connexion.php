<?php
// Paramètres de connexion à la base de données
$server = "localhost";
$username = "root";
$password = "";
$database = "gesetudiant";

// Activer les rapports d'erreur pour mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Connexion avec gestion des erreurs
    $connexion = new mysqli($server, $username, $password, $database);
    $connexion->set_charset("utf8"); // S'assurer que les données sont en UTF-8
} catch (mysqli_sql_exception $e) {
    // Afficher un message clair en cas d'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
