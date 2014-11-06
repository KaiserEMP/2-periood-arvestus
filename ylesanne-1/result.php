<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>

   <?php

    	$username = $_GET["firstname"];
		$age = $_GET["age"];

    	if ($age > 18){
    		echo "Tere $username! Olete lehekülje vaatamiseks piisavalt vana.";
    	}
    	else if ($age < 18) {
    		echo "Tere $username! Kahjuks olete liiga noor selle lehekülje külastamiseks.";
    	}
    	else {
    		echo "Puuduvad vajalikud andmed!";
    	}
    	
    ?>

    <a href="index.php">Mine tagasi</a>


  </body>
</html>
