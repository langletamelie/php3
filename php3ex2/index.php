<?php
$number = 0;
$number2 = rand(0,100);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 3EX2</title>
</head>
<body>
  <p>
  <?php
  while ($number < 20)
  {
    echo $number * $number2 . ' ';
      ?>
    </p>
      <?php
    $number++;
  }
  ?>
</body>
</html>
