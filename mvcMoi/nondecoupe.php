<?php

// Futur model
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


// Récupérer les données des utilisateurs depuis le modèle
$utilisateurs = getAllUsers();



?>

<!-- // futur vue.php Inclure la vue pour afficher les utilisateurs -->

<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Email</th>
        </tr>
        <?php foreach ($utilisateurs as $utilisateur): ?>
            <tr>
                <td><?php echo $utilisateur['username']; ?></td>
                <td><?php echo $utilisateur['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
