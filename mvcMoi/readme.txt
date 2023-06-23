Exemple simplifié d'un mini site utilisant l'architecture MVC pour afficher les informations d'une table "users" contenant les colonnes "nom" et "email". Assumons que le site ait les fichiers suivants :

1. `controleur.php` : Ce fichier sera responsable de la logique de contrôle et de la communication entre la vue et le modèle.

```php
<?php

// Inclure le modèle
require_once 'modele.php';

// Récupérer les données des utilisateurs depuis le modèle
$utilisateurs = getAllUsers();

// Inclure la vue pour afficher les utilisateurs
require_once 'vue.php';

?>
```

2. `vue.php` : Ce fichier sera responsable de l'affichage des données.

```php
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
                <td><?php echo $utilisateur['nom']; ?></td>
                <td><?php echo $utilisateur['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
```

3. `modele.php` : Ce fichier représente le modèle et contient la logique d'accès aux données.

```php
<?php

// Fonction pour récupérer tous les utilisateurs depuis la base de données
function getAllUsers() {
    // Se connecter à la base de données (exemple avec PDO)
    $pdo = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees', 'utilisateur', 'mot_de_passe');

    // Exécuter une requête pour récupérer tous les utilisateurs
    $requete = $pdo->query('SELECT nom, email FROM users');

    // Récupérer les résultats de la requête sous forme de tableau
    $utilisateurs = $requete->fetchAll(PDO::FETCH_ASSOC);

    // Retourner les utilisateurs
    return $utilisateurs;
}

?>
```

Dans cet exemple, le fichier `controleur.php` inclut le modèle `modele.php` pour récupérer les utilisateurs à partir de la base de données. Ensuite, il inclut la vue `vue.php` qui affiche les utilisateurs dans un tableau.

Notez que cet exemple est très simplifié et ne couvre pas tous les aspects de l'architecture MVC, tels que la gestion des actions de l'utilisateur, la validation des données, etc. Cependant, cela vous donne une idée générale de la façon dont les fichiers sont organisés dans une structure MVC pour afficher les données des utilisateurs.