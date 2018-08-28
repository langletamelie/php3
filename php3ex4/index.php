<?php $number = 1; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 3EX4</title>
</head>
<body>
  <p>
    <?php
    while ($number <= 10){ //tant que number est <=10
      echo $number; //renvoi le nombre
      ?>
    </p>
      <?php
      $number +=$number / 2 ;
    }

    for($number=1; $number <=10; $number +=$number /2){
      echo $number . ' ';
    }
    ?>
  </body>
  </html>
