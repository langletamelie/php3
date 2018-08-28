<?php
$lineNumber = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 3EX5</title>
</head>
<body>
  <p>
    <?php
    while ($lineNumber <=15)
    {
      echo 'On y arrive presque';
      ?>
    </p>
    <p>
      <?php
      $lineNumber++;
    }
    for($lineNumber = 1; $lineNumber <= 15; $lineNumber++){
      echo 'On y arrive presque' . ' ';
    }
    ?>
    <p/>
  </body>
  </html>
