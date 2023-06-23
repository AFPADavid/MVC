<?php

// Fonction pour récupérer tous les utilisateurs depuis la base de données
function getAllUsers() {
    // Se connecter à la base de données (exemple avec PDO)
    $pdo = new PDO('mysql:host=localhost;dbname=bddpdo', 'root', '');

    // Exécuter une requête pour récupérer tous les utilisateurs
    $requete = $pdo->query('SELECT username, email FROM users');

    // Récupérer les résultats de la requête sous forme de tableau
    $utilisateurs = $requete->fetchAll(PDO::FETCH_ASSOC);

    // Retourner les utilisateurs
    return $utilisateurs;
}

?>
