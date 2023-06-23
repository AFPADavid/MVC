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
