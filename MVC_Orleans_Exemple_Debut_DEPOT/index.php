<?php
  // index.php
  // Routage vers les differents controleurs
  //   /home
  //   /login
  //   /register
  //   /dashboard
  // On charge le fichier INIT.php pour connaitre le répertoire de Base du site
  require("init.php");
  // On charge les modeles et les controleurs
  require_once 'modele.php';
  require_once 'controllers.php';
  // gestion des routes
  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//  print_r($uri);
// print_r(REPERTOIRE_BASE);
  if (REPERTOIRE_BASE.'/index.php' == $uri)
    {
        //echo "index";
        accueil();
    }
  elseif (REPERTOIRE_BASE.'/index.php/home' == $uri) // == $uri && isset($_GET['id']))
    {
        accueil();
    }
  elseif (REPERTOIRE_BASE.'/index.php/demo' == $uri) // == $uri && isset($_GET['id']))
    {
        demo();
    }
  elseif (REPERTOIRE_BASE.'/index.php/test' == $uri) // == $uri && isset($_GET['id']))
    {
        test();
    }
    // elseif (REPERTOIRE_BASE.'/index.php/Dwwm22031' == $uri) // == $uri && isset($_GET['id']))
    // {
    //     demo_dwwm22031();
    // }
    else
    {
        header('Status: 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
    }
  ?>
