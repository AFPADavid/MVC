<?php
// templates/t-list.php
  $title = 'Demo';
  ob_start();
?>
  <h1>C'est la page de DEMO</h1>
 
<?php
  $content = ob_get_clean();
  include 'baseLayout.php'
?>