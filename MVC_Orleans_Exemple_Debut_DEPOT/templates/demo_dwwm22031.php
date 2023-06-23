<?php
// templates/t-list.php
  $title = 'Demo DWWM22031';
  ob_start();
?>
  <h1>C'est la page de DEMO DWWM22031</h1>
 
<?php
  $content = ob_get_clean();
  include 'baseLayout.php'
?>