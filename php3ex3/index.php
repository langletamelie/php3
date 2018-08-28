<?php
$number = 100;
$number2 = rand(1,100);// nombre aléatoire
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 3EX3</title>
</head>
<body>
  <p>
  <?php
  while ($number >= 10){ //tant que number est >=10
    echo $number * $number2 . ' '; //multiplication des 2 nombres
    ?>
  </p>
    <?php
    $number--; //décrémentation
  }
//boucle for qui a le meme résultat que la boucle while
  for($number =100; $number >=10; $number--){
    echo $number * $number2 . ' ';
  }
  ?>
</body>
</html>
