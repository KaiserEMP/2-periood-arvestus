<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>


    <?php 

    $name = "arvestus";
	$value = "Cookie on olemas";
	$expire = time() + (20);

	setcookie($name, $value, time() + 20);


	if (isset($_COOKIE["arvestus"])) {
		echo "{$value}";
	}
	else {
		echo 'Cookiet ei ole!';
	}

     ?>

  </body>
</html>
