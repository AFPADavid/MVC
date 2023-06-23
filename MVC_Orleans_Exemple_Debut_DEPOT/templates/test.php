<?php
// templates/t-list.php
  $title = 'Test';
  ob_start();
?>
  <h1>C'est la page de TEST</h1>
 
<?php
  $content = ob_get_clean();
  include 'baseLayout.php'
?>
