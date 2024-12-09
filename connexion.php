<?php
    
   
    // Paramètres de connexion à la base de données
    $server = "localhost";
    $username = "root"; // Utilisateur par défaut de XAMPP
    $password = "";     // Mot de passe par défaut de XAMPP (vide)
    $database = "gesetudiant"; // Nom de votre base de données
    
    // Établir la connexion avec mysqli
    $connexion = mysqli_connect($server, $username, $password, $database);
    
    // Vérifier la connexion
    if (!$connexion) {
        die("Erreur de connexion : " . mysqli_connect_error());
    }
    
    