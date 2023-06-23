<!-- templates/baseLayout.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <title><?php echo @$title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
</head>
<body>

    <div class="container-fluid">
        <header>
            <div class="d-flex justify-content-center">
                <a class="" href='<?php echo REPERTOIRE_BASE;?>/index.php/home'>
                    <button id="btnHome" class="btn">Accueil</button>
                </a>
                <a class="" href='<?php echo REPERTOIRE_BASE;?>/index.php/test'>
                    <button id="btnTest" class="btn">Test</button>
                </a>
                <a class="" href='<?php echo REPERTOIRE_BASE;?>/index.php/demo'>
                    <button id="btnDemo" class="btn">Demo</button>
                </a>
            </div>
        </header>

        <?php echo @$Message; ?>
        <h1><?php echo @$title; ?></h1>
        <?php echo $content ?>

        <footer>
            <h2>Mon super footer</h2>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            <?php
                echo @$scriptJS;
            ?>
        </script>
    </div>

</body>
</html>
 
