<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php require_once("demoHTML.php") ?>
        <h1>Accueil</h1>
        <div class="text-center">
            <a href="http://localhost/mvcSansBDD/index.php/home" class="btn btn-primary disabled">Accueil</a>
            <a href="http://localhost/mvcSansBDD/index.php/login" class="btn btn-primary">Connexion</a>
            <a href="http://localhost/mvcSansBDD/index.php/register" class="btn btn-primary">Inscription</a>
            <a href="http://localhost/mvcSansBDD/index.php/dashboard" class="btn btn-primary">Tableau de bord</a>
        </div>
        <div style="width: 50%;">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        <?php require_once("demoRequire.php") ?>
        <div>
        <div>
            <p>Utilisation de l'objet Circle dans la vue :</p>
            <p>Rayon : <?php echo $circle->getRadius(); ?></p>
            <p>Aire : <?php echo $circle->getArea(); ?></p>
        </div>
    </div>
</body>
</html>
