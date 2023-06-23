<?php
// templates/t-list.php
  $title = 'Accueil';
  ob_start();
?>
  <h1>C'est la page d'accueil</h1>
 
<?php
  $content = ob_get_clean();
  include 'baseLayout.php'
?>
