<?php
$lineNumber =1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 3EX7</title>
</head>
<body>
  <p>
  <?php
  while ($lineNumber <=100)
  {
    echo 'On tient le bon bout';
    ?>
  </p>
    <p>
    <?php
    $lineNumber+=15;
  }
  //pour la boucle for, il n'y a pas besoin de déclarer la variable avant
  for($lineNumber = 1; $lineNumber <= 100; $lineNumber +=15){
    echo 'On tient le bon bout' . ' '; //echo est une fonction
  }
  ?>
</p>
</body>
</html>
