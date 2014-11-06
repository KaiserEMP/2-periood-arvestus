<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
	<?php 
      $username = $_POST["username"];
      $sex = $_POST["sex"];
      $submit = $_POST['submit']; 
    ?> 

  <?php $username = isset($_POST['username']); ?>
  <?php $sex = isset($_POST['sex']); ?>
  <?php $submit = isset($_POST['submit']); ?>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_POST); ?></pre>


    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
