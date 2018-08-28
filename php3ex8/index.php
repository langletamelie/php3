<?php
$lineNumber = 200;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 3EX8</title>
</head>
<body>
  <p>
    <?php
    while ($lineNumber >=0) //tant que $lineNumber est supérieur ou égal à 0
    {
      echo 'Enfin !!!';
      ?>
    </p>
      <p>
        <?php
        $lineNumber-=12; // pas de 12
      }
      for($lineNumber = 200; $lineNumber >=0; $lineNumber -=12){
        echo 'Enfin !!!' . ' ';
      }
      ?>
    </p>
  </body>
  </html>
